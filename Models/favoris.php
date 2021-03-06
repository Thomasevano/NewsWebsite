<?php

function add_favoris ()
{
    global $bdd;

    $sql = "INSERT INTO favoris (id_u, id_c, titre) VALUES (:id_u, :id_c, :titre)";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':id_u', $_SESSION['id']);
    $requete->bindParam(':id_c', $_GET['id_c']);
    $requete->bindParam(':titre', $_GET['titre']);
    $requete->execute();
}