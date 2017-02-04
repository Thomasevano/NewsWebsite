<?php

require "Models/login.php";

if (isset($_SESSION['auth']) && $_SESSION['auth'] == true)
{
    require "Views/account.php";
}
else
{
    header("Location:" . BASE_URL."/404");
}
?>

