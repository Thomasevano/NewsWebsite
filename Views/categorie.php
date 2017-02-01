<?php

include 'Models/categorie.php';

echo '<div class="col-sm-12 col-md-3 col-lg-3">
            <div class="popular_categori">
                <h2 class="limeblue_bg">News Categorie</h2>
                <ul class="poplr_catgnva wow fadeInDown">';
                while ($categorie = $cat->fetch())
                {
                    echo '<li><a href="#'.$categorie["id_name"].'">'.$categorie["titre"].'</a></li>';
                }
echo '        </ul>
            </div>
      </div>';
?>

<script src="<?= BASE_URL; ?>/Views/assets/js/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.news_categorie') .hide();
        $('a[href^="#"]').on('click', function(event) {
            $('.news_categorie') .hide();
            var target = $(this).attr('href');

            $('.news_categorie'+target).toggle();

        });
    });
</script>
