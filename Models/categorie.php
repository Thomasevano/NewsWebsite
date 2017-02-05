<?php

    global $bdd;

    $cat = $bdd->prepare("SELECT * FROM categorie ORDER BY id_name");
    $cat->execute();