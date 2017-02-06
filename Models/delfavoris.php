<?php

function del_favoris ()
{
    global $bdd;

    $sql = "DELETE FROM favoris WHERE id_u=:id_u AND id_c=:id_c AND titre=:titre";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':id_u', $_SESSION['id']);
    $requete->bindParam(':id_c', $_GET['id_c']);
    $requete->bindParam(':titre', $_GET['titre']);
    $requete->execute();
}