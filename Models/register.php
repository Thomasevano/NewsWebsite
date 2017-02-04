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

    /*$sql = "INSERT INTO user (id_c) VALUES (:bfm :culture :foot :high-tech :jeux videos :le monde :sports)";
    $categorie = $bdd->prepare($sql);
    $categorie->bindParam(':bfm', $_POST['bfm']);
    $categorie->bindParam(':culture', $_POST['culture']);
    $categorie->bindParam(':foot', $_POST['foot']);
    $categorie->bindParam(':high_tech', $_POST['high_tech']);
    $categorie->bindParam(':jeux videos', $_POST['jeux videos']);
    $categorie->bindParam(':le monde', $_POST['le monde']);
    $categorie->bindParam(':sports', $_POST['sports']);
    $categorie->execute();*/

}