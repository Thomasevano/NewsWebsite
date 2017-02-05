<?php

require "Models/delarticles.php";

    del_articles();
    header("Location:" .BASE_URL."/account");

require "Views/delarticles.php";
?>