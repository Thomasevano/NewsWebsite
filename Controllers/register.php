<?php include ('Core/session.class.php'); ?>
<?php

require "Models/register.php";

if (isset($_POST['submit']))
{
    addUser();

    echo Session::setflash("Vous etes maintenant inscrit !");
    echo Session::flash();
}
else
{
    header("Location:" . BASE_URL . "/disconnect");
}

require "Views/register.php";
?>