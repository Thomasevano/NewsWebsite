<?php

require "Models/favoris.php";

    add_favoris();
    header("Location:" . BASE_URL);

require "Views/account.php";
?>
