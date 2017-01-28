<?php //include 'Core/session.class.php'; ?>
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
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Mauvais identifiants</strong></div>';
//        echo Session::setflash("Mauvais identifiants", "danger");
//        echo Session::flash();
    }
}


require "Views/login.php";
?>