<?php

//include ('Core/session.class.php');

echo '<div class="alert alert-danger" role="alert">
  <a href="'. BASE_URL .'" class="alert-link">Erreur 404 la page recherchée n\'a pas été trouver</a>
</div>';

/*echo Session::setflash_link("Erreur 404 la page recherchée n'a pas été trouver", ". BASE_URL .", "danger");
echo Session::flash_link();*/

?>