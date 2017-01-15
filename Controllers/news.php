<?php

$url = "http://www.lequipe.fr/rss/actu_rss_Football.xml";
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd M Y, H\hi');
    echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

$url = "http://www.lemonde.fr/rss/une.xml";
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd M Y, H\hi');
    echo '<li><img src="'.$item->img.'"><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

?>