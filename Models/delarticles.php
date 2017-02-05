<?php

function del_articles ()
{
    global $bdd;

    $sql = "DELETE FROM articles WHERE id_u=:id_u AND link=:link AND titre=:titre";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':id_u', $_SESSION['id']);
    $requete->bindParam(':link', $_GET['link']);
    $requete->bindParam(':titre', $_GET['titre']);
    $requete->execute();
}