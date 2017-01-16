<?php
session_start();
require "Models/connect.php";

define('BASE_URL',dirname($_SERVER['SCRIPT_NAME']));

    ob_start();
    require "Controllers/".$_GET['p'].".php";
    $content = ob_get_contents();
    ob_end_clean();


    if($_GET['p'] == "news")
    {
        require "Views/layout.php";
    }

?>