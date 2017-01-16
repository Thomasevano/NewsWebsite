<?php
if($_SESSION['auth']['level']== 1)
{
    require "Models/register.php";
    if(isset($_POST['submit']))
    {
        addUser();
        echo ('Vous etes maintenant inscrit !');
    }
    $_GET['p'] = 'admin';
    require "Views/register.php";
}
else
{
    header("Location:".BASE_URL."/disconnect");
}