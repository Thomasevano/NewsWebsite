<?php

require "Models/delfavoris.php";

    del_favoris();
    header("Location:" .BASE_URL."/account");

require "Views/delfavoris.php";
?>