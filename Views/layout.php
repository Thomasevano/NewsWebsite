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
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-md-6 col-lg-6">
                <div class="row">

                    <div class="leftbar_content">
                        <h2>Les dernières news</h2>
                        <div class="single_stuff wow fadeInDown">
                            <div class="single_stuff_img"><a href="pages/single.html"><img src="images/stuff_img1.jpg"
                                                                                           alt=""></a></div>
                            <div class="single_stuff_article">
                                <div class="single_sarticle_inner"><a class="stuff_category" href="#">Technology</a>
                                    <div class="stuff_article_inner"><span
                                                class="stuff_date">Nov <strong>17</strong></span>
                                        <h2><a href="pages/single.html">Duis quis erat non nunc fringilla</a></h2>
                                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas
                                            imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui
                                            lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan,
                                            nulla sed feugiat vehicula...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_stuff wow fadeInDown">
                            <div class="single_stuff_img"><a href="#"><img src="images/stuff_img1.jpg" alt=""></a></div>
                            <div class="single_stuff_article">
                                <div class="single_sarticle_inner"><a class="stuff_category" href="#">Technology</a>
                                    <div class="stuff_article_inner"><span
                                                class="stuff_date">Nov <strong>17</strong></span>
                                        <h2><a href="#">Duis quis erat non nunc fringilla</a></h2>
                                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas
                                            imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui
                                            lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan,
                                            nulla sed feugiat vehicula...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_stuff wow fadeInDown">
                            <div class="single_stuff_img"><a href="#"><img src="images/stuff_img1.jpg" alt=""></a></div>
                            <div class="single_stuff_article">
                                <div class="single_sarticle_inner"><a class="stuff_category" href="#">Technology</a>
                                    <div class="stuff_article_inner"><span
                                                class="stuff_date">Nov <strong>17</strong></span>
                                        <h2><a href="#">Duis quis erat non nunc fringilla</a></h2>
                                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas
                                            imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui
                                            lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan,
                                            nulla sed feugiat vehicula...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stuffpost_paginatinonarea wow slideInLeft">
                            <ul class="newstuff_pagnav">
                                <li><a class="active_page" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="single_blog_sidebar wow fadeInUp">
                    <h2>News Categorie</h2>
                    <ul class="poplr_tagnav">
                        <li><a href="#">Arts</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Comedy</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Tourism</a></li>
                        <li><a href="#">Videos</a></li>
                    </ul>
                </div>
            </div>
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