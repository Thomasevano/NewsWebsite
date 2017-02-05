<?php

include 'Core/alert.class.php';

require "Models/login.php";

if (isset($_POST['submit']))
{
    $user = get_user($_POST);

    if($user)
    {
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $user['id_u'];
        $_SESSION['login'] = $user['login'];
        $_SESSION['mail'] = $user['mail'];
        $_SESSION['mdp'] = $user['mdp'];
        header("Location:" . BASE_URL);
    }
    else
    {
        echo Alert::alert_message("Mauvais identifiants", "danger");
    }
}


require "Views/login.php";
?>