<?php

require "Models/login.php";

if(isset($_POST['submit']))
{
    $user = get_user($_POST);

    if($user)
    {
        $_SESSION['auth'] = $user; //connection user
            header("Location:".BASE_URL);
    }
    else
    {
        echo "Mauvais identifiants";
    }
}

require "Views/login.php"
?>