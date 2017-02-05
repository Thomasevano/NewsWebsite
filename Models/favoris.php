<?php

function add_favoris ()
{
    global $bdd;

    $sql = "INSERT INTO favoris (id_u, id_c) VALUES (:id_u, :id_c)";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':id_u', $_SESSION['id']);
    $requete->bindParam(':id_c', $_GET['id_c']);
    $requete->execute();
}