<?php
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=news;charset=utf8","root",""); // connection bdd
}
catch(Exception $e)
{
    die("erreur de connexion"); //erreur
}
?>