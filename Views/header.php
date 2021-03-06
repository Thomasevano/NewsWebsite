<!DOCTYPE html>
<html>
<head>
    <title>YourNews</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/assets/css/font.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/assets/css/animate.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/assets/css/structure.css">
    <link rel="icon" type="image/png" href="<?= BASE_URL; ?>/Views/img/flux.png" />
    <!--[if lt IE 9]>
    <script src="<?= BASE_URL; ?>/Views/assets/js/html5shiv.min.js"></script>
    <script src="<?= BASE_URL; ?>/Views/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<header id="header">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= BASE_URL; ?>"><span>YourNews</span></a></div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav custom_nav">
                        <li><a href="<?= BASE_URL; ?>"><i class="glyphicon glyphicon-home"></i> Accueil</a></li>
                        <?php

                        if (isset($_SESSION['auth']) && $_SESSION['auth'] == true)
                        {
                            echo '<li><a href=' . BASE_URL . '/account><i class="glyphicon glyphicon-user"></i> Mon Compte</a></li>';
                            echo '<li><a href=' . BASE_URL. '/disconnect><i class="glyphicon glyphicon-log-out"></i> Déconnexion</a></li>';
                        }
                        else
                        {
                            echo "<li><a href=" . BASE_URL . "/login><i class='glyphicon glyphicon-log-in'></i> Se connecter</a></li>";
                            echo "<li><a href=" . BASE_URL . "/register><i class='glyphicon glyphicon-log-in'></i> S'inscrire</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!--<form id="searchForm">
            <input type="text" placeholder="Rechercher...">
            <input type="submit" value="">
        </form>-->
    </div>
</header>