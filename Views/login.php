<!DOCTYPE html>
<html>
<head>
    <title>ColorMag</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/structure.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
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
                    <a class="navbar-brand" href="layout.php">Your<span>News</span></a></div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav custom_nav">
                        <li class=""><a href="layout.php">Accueil</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-expanded="false">Jobs</a>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-expanded="false">Mon Compte</a>
                        </li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="login.php">Se Connecter</a></li>
                        <li><a href="#">S'inscrire</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <form id="searchForm">
            <input type="text" placeholder="Rechercher...">
            <input type="submit" value="">
        </form>
    </div>
</header>
<section id="contentbody">
    <div class="col-lg-12">
        <hr>
    </div>
    <div class="col-lg-6 col-lg-offset-3">
        <div class="row">
            <form action="#" method="post">
                <div class="col-lg-5 col-lg-offset-4">
                    <div class="form-group">
                        <!--<label for="contact_email">Email:</label>-->
                        <input type="text" id="mail" name="mail" class="form-control" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <!--<label for="contact_subject">Subject:</label>-->
                        <input type="password" id="mdp" name="mdp" class="form-control" placeholder="************"/>
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning pull-right">Valider</button>
            </form>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer_inner">
                    <p class="pull-left">Copyright &copy; 2017 YourNews</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
