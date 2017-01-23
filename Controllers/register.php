<?php //include ('Core/session.class.php'); ?>
<?php

require "Models/register.php";

if (isset($_POST['submit']))
{
    addUser();

    echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Vous etes maintenant inscrit !</strong></div>';

    /*echo Session::setflash("Vous etes maintenant inscrit !");
    echo Session::flash();*/

    $_SESSION['auth'] = true;
    header("Location:" . BASE_URL);
}
/*else
{
    header("Location:" . BASE_URL . "/disconnect");
}*/

require "Views/register.php";
?>