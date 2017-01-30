<?php include ('Core/alert.class.php'); ?>
<?php

require "Models/register.php";

if (isset($_POST['submit']))
{
    addUser();

    echo Alert::alert_message("Vous etes maintenant inscrit !");

    $_SESSION['auth'] = true;
//    header("Location:" . BASE_URL);
}

require "Views/register.php";
?>