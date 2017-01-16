<?php
function addUser()
{
    global $bdd;

    $sql = "INSERT INTO user (login, mdp, mail) VALUES (:login,:mdp,:mail)";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':login', $_POST['login']);
    $requete->bindParam(':password', $_POST['mdp']);
    $requete->bindParam(':mail', $_POST['mail']);

    $requete->execute();

}