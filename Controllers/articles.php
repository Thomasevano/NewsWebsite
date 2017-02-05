<?php

require "Models/articles.php";

    add_articles();
    header("Location:" . BASE_URL);

require "Views/articles.php";
?>