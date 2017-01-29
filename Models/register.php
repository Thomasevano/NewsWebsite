<?php
function addUser()
{
    global $bdd;

    $sql = "INSERT INTO user (mail, login, mdp) VALUES (:mail,:login,:mdp)";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':mail', $_POST['mail']);
    $requete->bindParam(':login', $_POST['login']);
    $requete->bindParam(':mdp', sha1($_POST['mdp']));
    $requete->execute();

    $sql = "INSERT INTO user (id_c) VALUES (:bfm :culture :foot :high-tech :jeux videos :le monde :sports)";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':bfm', $_POST['bfm']);
    $requete->bindParam(':culture', $_POST['culture']);
    $requete->bindParam(':foot', $_POST['foot']);
    $requete->bindParam(':high_tech', $_POST['high_tech']);
    $requete->bindParam(':jeux videos', $_POST['jeux videos']);
    $requete->bindParam(':le monde', $_POST['le monde']);
    $requete->bindParam(':sports', $_POST['sports']);
    $requete->execute();

}