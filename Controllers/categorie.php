<?php

require "Models/categorie.php";

if (isset($id['bfm']))
{
    getCategorie();

    echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Vous etes maintenant inscrit !</strong></div>';

    /*echo Session::setflash("Vous etes maintenant inscrit !");
    echo Session::flash();*/

    $_SESSION['auth'] = true;
    header("Location:" . BASE_URL);
}

require "Views/register.php";
?>