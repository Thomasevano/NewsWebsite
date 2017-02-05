<?php

function add_articles ()
{
    global $bdd;

    $sql = "INSERT INTO articles (id_u, link, titre) VALUES (:id_u, :link, :titre)";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':id_u', $_SESSION['id']);
    $requete->bindParam(':link', $_GET['link']);
    $requete->bindParam(':titre', $_GET['titre']);
    $requete->execute();
}
