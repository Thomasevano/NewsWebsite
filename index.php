<?php
session_start();
require "Models/connect.php";

define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));

/*if (!isset($_SESSION['auth']))
{
    require "Controllers/login.php";
}
else
{*/
    if (!isset($_GET['p']) || $_GET['p'] == "")
    {
        $_GET['p'] = "news";
    }
    else
    {
        if (!file_exists("Controllers/" . $_GET['p'] . ".php"))
        {
            $_GET['p'] = '404';
        }
    }

    ob_start();
    require "Controllers/" . $_GET['p'] . ".php";
    $content = ob_get_contents();
    ob_end_clean();

    require "Views/layout.php";
//}
?>