<?php

function getCategorie()
{
    global $bdd;

    $cat = $bdd->prepare("SELECT * FROM categorie");
    $cat->execute();
    return $cat->fetch();
}