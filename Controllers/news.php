<?php

/*if($_SESSION['auth'])
{
    require "Models/news.php";
    $_GET['p'] = 'accueil';
    require "Views/news.php";
    $News = getNews();
}
else
{
    header("Location:".BASE_URL."/disconnect");
}*/

require "Models/news.php";
$_GET['p'] = 'news';
require "Views/news.php";
$News = getNews();

function getNews()
{

    $url = "http://www.clubic.com/articles.rss";
    $rss = simplexml_load_file($url);

    echo '<div class=" col-sm-12 col-md-6 col-lg-6">';
    echo '<div class="row">';
    echo '<div class="single_stuff wow fadeInDown">';
    echo"<div class='leftbar_content'><h2>L'actualité High-Tech</h2></div>";
    foreach ($rss->channel->item as $item)
    {
        echo '<div class="single_stuff_article">';
        $datetime = date_create($item->pubDate);
        $date = date_format($datetime, 'd M H\hi');
        echo '<div class="item" id=".$item->img."><div class="single_stuff_img"><img src="'.$item->img.'" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">'.$item->category.'</a><div class="stuff_article_inner"><span class="stuff_date"><strong>'.$date.'</strong></span><h2><a href="'.$item->link.'">'.$item->title.'</a></h2>','<p>'.$item->description.'</p></div></div></div>';
        echo '</div>';
    }
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo '<div class="col-sm-12 col-md-3 col-lg-3">
                <div class="single_blog_sidebar wow fadeInUp">
                    <h2>News Categorie</h2>
                    <ul class="poplr_tagnav">
                        <li><a href="#">BFMTV</a></li>
                        <li><a href="#">Culture</a></li>
                        <li><a href="#">Football</a></li>
                        <li><a href="#">High-Tech</a></li>
                        <li><a href="#">Jeux Videos</a></li>
                        <li><a href="#">Le Monde</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>
                </div>
            </div>';


}

?>
<!--http://www.lequipe.fr/rss/actu_rss_Football.xml
http://www.lemonde.fr/rss/une.xml
http://www.jeuxvideo.com/rss/rss.xml
http://www.lepoint.fr/24h-infos/rss.xml
http://www.ouest-france.fr/rss-en-continu.xml
http://tempsreel.nouvelobs.com/rss.xml
http://www.clubic.com/articles.rss
http://www.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/
http://www.lemonde.fr/culture/rss_full.xml
-->