<?php
if($_SESSION['auth'])
{
    require "Models/register.php";
    if(isset($_POST['submit']))
    {
        addUser();
        echo ('Vous etes maintenant inscrit !');
    }
    require "Views/register.php";
}
else
{
    header("Location:".BASE_URL."/disconnect");
}