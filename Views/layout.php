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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
            $(window).scroll(function () {
                if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                    $.ajax({
                        url: "<?= BASE_URL; ?>/news.php?News=" + $(".item:last").attr("id"),
                        success: function (html) {
                            if (html) {
                                $(".row").append(html);
                            } else {
                                alert("Il n'y a plus de news");
                            }
                        }
                    });
                }
            });
        </script>
    </div>
</section>
<?php include 'footer.php'; ?>
