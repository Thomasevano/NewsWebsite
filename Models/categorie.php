<?php

    global $bdd;

    $cat = $bdd->prepare("SELECT * FROM categorie");
    $cat->execute();
    $cat->fetch();