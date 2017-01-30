<?php

include 'Core/flux.class.php';

require "Models/news.php";
$_GET['p'] = 'news';

echo Flux::fluxrss("bfm", "block", "BFM", "http://www.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/");

echo Flux::fluxrss("culture", "none", "Culturelle", "http://www.lemonde.fr/culture/rss_full.xml");

echo Flux::fluxrss("football", "none", "Footbalistique", "http://www.lequipe.fr/rss/actu_rss_Football.xml");

echo Flux::fluxrss("high-tech", "none", "High-Tech", "http://www.clubic.com/articles.rss");

echo Flux::fluxrss("jeux videos", "none", "Jeux-Videoludique", "http://www.jeuxvideo.com/rss/rss.xml");

echo Flux::fluxrss("le monde", "none", "Le Monde", "http://www.lemonde.fr/rss/une.xml");

echo Flux::fluxrss("sports", "none", "Sportive", "http://www.lequipe.fr/rss/actu_rss.xml");

require "Views/news.php";
?>
