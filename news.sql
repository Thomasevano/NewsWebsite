-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 06 Février 2017 à 22:20
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `news`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_a` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_a`, `id_u`, `link`, `titre`) VALUES
(1, 1, 'http://www.developpez.com/actu/116456/USA-un-juge-estime-que-Google-doit-remettre-aux-forces-de-l-ordre-les-donnees-stockees-a-l-etranger-malgre-le-precedent-cree-par-Microsoft/', 'USA : un juge estime que Google doit remettre aux forces de l\'ordre les données stockées à l\'étranger, malgré le précédent créé par Microsoft'),
(2, 1, 'http://www.developpez.com/actu/116431/Microsoft-annonce-Git-Virtual-File-System-GVFS-pour-Windows-10-une-solution-destinee-a-supporter-les-enormes-depots-et-bases-de-code/', 'Microsoft annonce Git Virtual File System (GVFS) pour Windows 10, une solution destinée à supporter les énormes dépôts et bases de code'),
(3, 1, 'http://www.jeuxvideo.com/videos/gaming-live/601867/gangstar-new-orleans-premier-tour-d-horizon-sur-ce-gta-like-mobile.htm', 'Gangstar New Orleans : Premier tour d\'horizon sur ce GTA-like mobile'),
(14, 1, 'http://www.developpez.com/actu/116471/Un-premier-apercu-de-Windows-10-Cloud-a-fuite-le-concurrent-de-Chrome-OS-permettrait-uniquement-l-execution-d-applications-issues-du-Windows-Store/', 'Un premier aperçu de Windows 10 Cloud a fuité, le concurrent de Chrome OS permettrait uniquement l\'exécution d\'applications issues du Windows Store'),
(16, 12, 'http://www.lemonde.fr/pixels/article/2016/11/10/pourquoi-la-playstation-4-pro-ne-lit-pas-les-blu-ray-4k_5028775_4408996.html', 'Pourquoi la PlayStation 4 Pro ne lit pas les Blu-ray 4K'),
(9, 1, 'http://rss.allocine.fr/~r/ac/actualites/~3/rGwHi3QpH5s/fichearticle_gen_carticle=18660036.html', 'EXCLU Ghost in the Shell : Scarlett Johansson passe à l’action');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_c` int(11) NOT NULL,
  `id_name` varchar(50) NOT NULL,
  `titre` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_c`, `id_name`, `titre`) VALUES
(9, 'bfm', 'BFM'),
(2, 'le-monde-culture', 'Le Monde Culture'),
(3, 'football', 'Football'),
(5, 'jeux-video', 'Jeux-Videos'),
(6, 'le-monde', 'Le Monde'),
(7, 'sports', 'Sports'),
(8, 'le-monde-technologies', 'Le Monde Technologies'),
(10, 'allocine', 'Allocine'),
(11, 'developpez', 'Developpement');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id_f` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `favoris`
--

INSERT INTO `favoris` (`id_f`, `id_u`, `id_c`, `titre`) VALUES
(9, 1, 5, 'Jeux-Videos'),
(7, 1, 10, 'Allocine'),
(8, 1, 11, 'Developpement'),
(10, 12, 8, 'Le Monde Technologies'),
(11, 12, 6, 'Le Monde');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `login`, `mdp`, `mail`) VALUES
(1, 'thomas', '8cb2237d0679ca88db6464eac60da96345513964', 'test@mail.fr'),
(12, 'thomas', '5f50a84c1fa3bcff146405017f36aec1a10a9e38', 'thomas@mail.fr');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_a`),
  ADD KEY `articles_ibfk_1` (`id_u`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id_f`),
  ADD KEY `favoris_ibfk_1` (`id_u`),
  ADD KEY `favoris_ibfk_2` (`id_c`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
