<?php

require "Models/favoris.php";

    if(isset($_POST['submit']))
    {
        for($i=0; $i<sizeof($_POST['chk']);$i++)
        {
            add_favoris();
        }
    }
    require "Views/account.php";
?>
