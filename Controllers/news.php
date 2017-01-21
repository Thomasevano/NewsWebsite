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
    /*$url = "http://www.jeuxvideo.com/rss/rss.xml";
    $rss = simplexml_load_file($url);
    echo '<ul>';
    foreach ($rss->channel->item as $item)
    {
        $datetime = date_create($item->pubDate);
        $date = date_format($datetime, 'd M Y, H\hi');
        echo '<li><img src="'.$item->img.'"><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
    }
    echo '</ul>';*/

    /*$url = "http://tempsreel.nouvelobs.com/rss.xml";
    $rss = simplexml_load_file($url);
    foreach ($rss->channel->item as $item)
    {
        echo '<div class="single_stuff_article">';
        $datetime = date_create($item->pubDate);
        $date = date_format($datetime, 'd M H\hi');
        echo '<div class="single_sarticle_inner"><a class="stuff_category" href="#">'.$item->category.'</a><div class="stuff_article_inner"><span class="stuff_date"><strong>'.$date.'</strong></span><h2><a href="'.$item->link.'">'.$item->title.'</a></h2>','<p>'.$item->description.'</p></div></div>';
        echo '</div>';
    }*/

    $url = "http://www.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/";
    $rss = simplexml_load_file($url);

    echo '<div class=" col-sm-12 col-md-6 col-lg-6">';
    echo '<div class="row">';
    echo '<div class="single_stuff wow fadeInDown">';
    echo"<div class='leftbar_content'><h2>L'actualité de BFMTV</h2></div>";
    foreach ($rss->channel->item as $item)
    {
        echo '<div class="single_stuff_article">';
        $datetime = date_create($item->pubDate);
        $date = date_format($datetime, 'd M H\hi');
        echo '<div class="single_stuff_img"><img src="'.$item->img.'" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">'.$item->category.'</a><div class="stuff_article_inner"><span class="stuff_date"><strong>'.$date.'</strong></span><h2><a href="'.$item->link.'">'.$item->title.'</a></h2>','<p>'.$item->description.'</p></div></div>';
        echo '</div>';
    }
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo '<div class="col-sm-12 col-md-3 col-lg-3">
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
http://www.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/-->