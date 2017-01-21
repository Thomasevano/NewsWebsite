<?php
function addUser()
{
    global $bdd;

    $sql = "INSERT INTO user (mail, login, mdp) VALUES (:mail,:login,:mdp)";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':mail', $_POST['mail']);
    $requete->bindParam(':login', $_POST['login']);
    $requete->bindParam(':password', sha1($_POST['mdp']));

    $requete->execute();

}