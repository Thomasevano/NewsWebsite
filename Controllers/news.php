<?php

if($_SESSION['auth'])
{
    require "Models/news.php";
    $_GET['p'] = 'accueil';
    require "Views/news.php";
    $News = getNews();
}
else
{
    header("Location:".BASE_URL."/disconnect");
}
?>