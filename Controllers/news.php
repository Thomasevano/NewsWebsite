<?php

require "Models/news.php";
$_GET['p'] = 'news';

?>

        <div id="bfm" class="news_categorie" style="display: block">

        <?php $url = "http://www.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/";
            $rss = simplexml_load_file($url);

            echo '<div class=" col-sm-12 col-md-6 col-lg-6" id="news" >';
            echo '<div class="row">';
            echo '<div class="single_stuff wow fadeInDown">';
            echo "<div class='leftbar_content'><h2>L'actualité BFM</h2></div>";
            foreach ($rss->channel->item as $item) {
                echo '<div class="single_stuff_article">';
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M H\hi');
                echo '<div class="item"><div class="single_stuff_img"><img src="' . $item->img . '" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">' . $item->category . '</a><div class="stuff_article_inner"><span class="stuff_date"><strong>' . $date . '</strong></span><h2><a href="' . $item->link . '">' . $item->title . '</a></h2>', '<p>' . $item->description . '</p>','<div class="social_area wow fadeInLeft"><ul><li><a href="'. $item->link .'"><span class="fa fa-facebook"></span></a></li><li><a href="'. $item->link .'"><span class="fa fa-twitter"></span></a></li></ul></div>','</div></div></div>';
                echo '</div>';
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        ?>

        </div>

        <div id="culture" class="news_categorie" style="display: none">

        <?php $url = "http://www.lemonde.fr/culture/rss_full.xml";
            $rss = simplexml_load_file($url);

            echo '<div class=" col-sm-12 col-md-6 col-lg-6" id="news" >';
            echo '<div class="row">';
            echo '<div class="single_stuff wow fadeInDown">';
            echo "<div class='leftbar_content'><h2>L'actualité Culturelle</h2></div>";
            foreach ($rss->channel->item as $item) {
                echo '<div class="single_stuff_article">';
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M H\hi');
                echo '<div class="item"><div class="single_stuff_img"><img src="' . $item->img . '" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">' . $item->category . '</a><div class="stuff_article_inner"><span class="stuff_date"><strong>' . $date . '</strong></span><h2><a href="' . $item->link . '">' . $item->title . '</a></h2>', '<p>' . $item->description . '</p>','<div class="social_area wow fadeInLeft"><ul><li><a href="'. $item->link .'"><span class="fa fa-facebook"></span></a></li><li><a href="'. $item->link .'"><span class="fa fa-twitter"></span></a></li></ul></div>','</div></div></div>';
                echo '</div>';
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        ?>

        </div>

        <div id="football" class="news_categorie" style="display: none">

        <?php $url = "http://www.lequipe.fr/rss/actu_rss_Football.xml";
            $rss = simplexml_load_file($url);

            echo '<div class=" col-sm-12 col-md-6 col-lg-6" id="news" >';
            echo '<div class="row">';
            echo '<div class="single_stuff wow fadeInDown">';
            echo "<div class='leftbar_content'><h2>L'actualité Footbalistique</h2></div>";
            foreach ($rss->channel->item as $item) {
                echo '<div class="single_stuff_article">';
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M H\hi');
                echo '<div class="item"><div class="single_stuff_img"><img src="' . $item->img . '" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">' . $item->category . '</a><div class="stuff_article_inner"><span class="stuff_date"><strong>' . $date . '</strong></span><h2><a href="' . $item->link . '">' . $item->title . '</a></h2>', '<p>' . $item->description . '</p>','<div class="social_area wow fadeInLeft"><ul><li><a href="'. $item->link .'"><span class="fa fa-facebook"></span></a></li><li><a href="'. $item->link .'"><span class="fa fa-twitter"></span></a></li></ul></div>','</div></div></div>';
                echo '</div>';
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        ?>

        </div>

        <div id="high-tech" class="news_categorie" style="display: none">

        <?php $url = "http://www.clubic.com/articles.rss";
            $rss = simplexml_load_file($url);

            echo '<div class=" col-sm-12 col-md-6 col-lg-6" id="news" >';
            echo '<div class="row">';
            echo '<div class="single_stuff wow fadeInDown">';
            echo "<div class='leftbar_content'><h2>L'actualité High-Tech</h2></div>";
            foreach ($rss->channel->item as $item) {
                echo '<div class="single_stuff_article">';
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M H\hi');
                echo '<div class="item"><div class="single_stuff_img"><img src="' . $item->img . '" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">' . $item->category . '</a><div class="stuff_article_inner"><span class="stuff_date"><strong>' . $date . '</strong></span><h2><a href="' . $item->link . '">' . $item->title . '</a></h2>', '<p>' . $item->description . '</p>','<div class="social_area wow fadeInLeft"><ul><li><a href="'. $item->link .'"><span class="fa fa-facebook"></span></a></li><li><a href="'. $item->link .'"><span class="fa fa-twitter"></span></a></li></ul></div>','</div></div></div>';
                echo '</div>';
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        ?>

        </div>

        <div id="jeux videos" class="news_categorie" style="display: none">

        <?php $url = "http://www.jeuxvideo.com/rss/rss.xml";
            $rss = simplexml_load_file($url);

            echo '<div class=" col-sm-12 col-md-6 col-lg-6" id="news" >';
            echo '<div class="row">';
            echo '<div class="single_stuff wow fadeInDown">';
            echo "<div class='leftbar_content'><h2>L'actualité Jeux Vidéoludique</h2></div>";
            foreach ($rss->channel->item as $item) {
                echo '<div class="single_stuff_article">';
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M H\hi');
                echo '<div class="item"><div class="single_stuff_img"><img src="' . $item->img . '" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">' . $item->category . '</a><div class="stuff_article_inner"><span class="stuff_date"><strong>' . $date . '</strong></span><h2><a href="' . $item->link . '">' . $item->title . '</a></h2>', '<p>' . $item->description . '</p>','<div class="social_area wow fadeInLeft"><ul><li><a href="'. $item->link .'"><span class="fa fa-facebook"></span></a></li><li><a href="'. $item->link .'"><span class="fa fa-twitter"></span></a></li></ul></div>','</div></div></div>';
                echo '</div>';
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        ?>

        </div>

        <div id="le monde" class="news_categorie" style="display: none">

        <?php $url = "http://www.lemonde.fr/rss/une.xml";
            $rss = simplexml_load_file($url);

            echo '<div class=" col-sm-12 col-md-6 col-lg-6" id="news" >';
            echo '<div class="row">';
            echo '<div class="single_stuff wow fadeInDown">';
            echo "<div class='leftbar_content'><h2>L'actualité sur Le Monde</h2></div>";
            foreach ($rss->channel->item as $item) {
                echo '<div class="single_stuff_article">';
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M H\hi');
                echo '<div class="item"><div class="single_stuff_img"><img src="' . $item->img . '" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">' . $item->category . '</a><div class="stuff_article_inner"><span class="stuff_date"><strong>' . $date . '</strong></span><h2><a href="' . $item->link . '">' . $item->title . '</a></h2>', '<p>' . $item->description . '</p>','<div class="social_area wow fadeInLeft"><ul><li><a href="'. $item->link .'"><span class="fa fa-facebook"></span></a></li><li><a href="'. $item->link .'"><span class="fa fa-twitter"></span></a></li></ul></div>','</div></div></div>';
                echo '</div>';
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        ?>

        </div>

        <div id="sports" class="news_categorie" style="display: none">

        <?php $url = "http://www.lequipe.fr/rss/actu_rss.xml";
              $rss = simplexml_load_file($url);

            echo '<div class=" col-sm-12 col-md-6 col-lg-6" id="news" >';
            echo '<div class="row">';
            echo '<div class="single_stuff wow fadeInDown">';
            echo "<div class='leftbar_content'><h2>L'actualité Sportive</h2></div>";
            foreach ($rss->channel->item as $item) {
                echo '<div class="single_stuff_article">';
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M H\hi');
                echo '<div class="item"><div class="single_stuff_img"><img src="' . $item->img . '" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">' . $item->category . '</a><div class="stuff_article_inner"><span class="stuff_date"><strong>' . $date . '</strong></span><h2><a href="' . $item->link . '">' . $item->title . '</a></h2>', '<p>' . $item->description . '</p>','<div class="social_area wow fadeInLeft"><ul><li><a href="'. $item->link .'"><span class="fa fa-facebook"></span></a></li><li><a href="'. $item->link .'"><span class="fa fa-twitter"></span></a></li></ul></div>','</div></div></div>';
                echo '</div>';
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        ?>

        </div>

<?php require "Views/news.php"; ?>