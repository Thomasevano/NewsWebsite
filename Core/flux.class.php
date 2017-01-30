<?php

class Flux
{
    public static function fluxrss ($id, $display = 'none', $title, $xml)
    {
        $fluxrss = "<div id='".$id."' class='news_categorie' style='display: ".$display."'>

        
        <div class=' col-sm-12 col-md-6 col-lg-6' id='news'>
                <div class='row'>
                <div class='single_stuff wow fadeInDown'>
                <div class='leftbar_content'><h2>L'actualité ".$title."</h2></div>";

        $url = "$xml";
        $rss = simplexml_load_file($url);
        foreach ($rss->channel->item as $item)
        {
                $fluxrss.= '<div class="single_stuff_article">';
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M H\hi');
                $fluxrss.= '<div class="item"><div class="single_stuff_img"><img src=" '. $item->img . '" alt=""></div><div class="single_sarticle_inner"><a class="stuff_category" href="#"> '. $item->category .' </a><div class="stuff_article_inner"><span class="stuff_date"><strong> '. $date .' </strong></span><h2><a href=" '. $item->link .' "> '. $item->title .' </a></h2>, <p> '. $item->description .' </p>,<div class="social_area wow fadeInLeft"><ul><li><a href="'. $item->link .'"><span class="fa fa-facebook"></span></a></li><li><a target="_blank" href="https://twitter.com/share" data-url=" '. $item->link .' "><span class="fa fa-twitter"></span></a></li></ul></div>,</div></div></div>;
                </div>';
        }

        $fluxrss.= '</div></div></div></div>';

        return $fluxrss;

    }
}