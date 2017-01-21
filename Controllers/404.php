<?php

include ('Core/session.class.php');

echo Session::setflash_link("Erreur 404 la page recherchée n'a pas été trouver", ". BASE_URL .", "danger");
echo Session::flash_link();

?>