<?php

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

    $url = "http://www.jeuxvideo.com/rss/rss.xml";
    $rss = simplexml_load_file($url);
    foreach ($rss->channel->item as $item)
    {
        echo '<div class="single_stuff_article">';
        $datetime = date_create($item->pubDate);
        $date = date_format($datetime, 'M d');
        echo '<div class="single_sarticle_inner"><a class="stuff_category" href="#">'.$item->category.'</a><div class="stuff_article_inner"><span class="stuff_date"><strong>'.$date.'</strong></span><h2><a href="'.$item->link.'">'.$item->title.'</a></h2>','<p>'.$item->description.'</p></div></div>';
        echo '</div>';
    }

    /*$url = "http://www.ouest-france.fr/rss-en-continu.xml";
    $rss = simplexml_load_file($url);
    foreach ($rss->channel->item as $item)
    {
        echo '<div class="single_stuff_article">';
        $datetime = date_create($item->pubDate);
        $date = date_format($datetime, 'M d');
        echo '<div class="single_stuff_img"><img src="'.$item->img.'" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#">'.$item->category.'</a><div class="stuff_article_inner"><span class="stuff_date"><strong>'.$date.'</strong></span><h2><a href="'.$item->link.'">'.$item->title.'</a></h2>','<p>'.$item->description.'</p></div></div>';
        echo '</div>';
    }*/
}

?>
<!--http://www.lequipe.fr/rss/actu_rss_Football.xml
http://www.lemonde.fr/rss/une.xml
http://www.jeuxvideo.com/rss/rss.xml
http://www.lepoint.fr/24h-infos/rss.xml
http://www.ouest-france.fr/rss-en-continu.xml
http://tempsreel.nouvelobs.com/rss.xml
http://www.clubic.com/articles.rss-->