<?php include ('Core/session.class.php'); ?>
<?php

require "Models/login.php";

if (isset($_POST['submit']))
{
    $user = get_user($_POST);

    if($user)
    {
        $user = get_user($_POST);
        $_SESSION['auth'] = true;
        header("Location:" . BASE_URL);
    }
    else
    {
        echo Session::setflash("Mauvais identifiants", "danger");
        echo Session::flash();
    }
}


require "Views/login.php";
?>