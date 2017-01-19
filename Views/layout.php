<?php include 'header.php'; ?>

<section id="contentbody">
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <!--<div class="leftbar_content">
                        <h2>Les dernières news</h2>-->
                        <div class="single_stuff wow fadeInDown">
                            <?php echo $content; ?>
                        </div>
<!--                    </div>-->
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
<?php include 'footer.php'; ?>
