<?php

if (isset($_SESSION['auth']) && $_SESSION['auth'] == true)
{
    echo "<h3>Vous êtes connecter en tant que: </h3>
    <p>Votre mail est: </p>
    <p>Vous etes inscrit aux catégries: </p>";
}
?>