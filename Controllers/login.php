<?php

include 'Core/alert.class.php';

require "Models/login.php";

if (isset($_POST['submit']))
{
    $user = get_user($_POST);

    if($user)
    {
        $_SESSION['auth'] = true;
        header("Location:" . BASE_URL);
    }
    else
    {
        echo Alert::alert_message("Mauvais identifiants", "danger");
    }
}


require "Views/login.php";
?>