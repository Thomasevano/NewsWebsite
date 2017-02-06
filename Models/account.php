<?php

    global $bdd;

    $articles = $bdd->prepare("SELECT * FROM articles WHERE id_u=:id_u ORDER BY titre");
    $articles->bindValue(':id_u', $_SESSION['id'], PDO::PARAM_STR);
    $articles->execute();

    $favoris = $bdd->prepare("SELECT * FROM favoris WHERE id_u=:id_u ORDER BY id_f");
    $favoris->bindValue(':id_u', $_SESSION['id'], PDO::PARAM_STR);
    $favoris->execute();