<?php

class Flux
{
    public static function fluxrss ($id, $title, $xml)
    {
        $fluxrss = "<div id='$id' class='news_categorie'>

        
        <div class=' col-sm-12 col-md-6 col-lg-5 col-lg-offset-3' id='news'>
                <div class='row'>
                <div class='single_stuff wow fadeInDown'>
                <div class='leftbar_content'>
                    <h2>L'actualité ".$title."</h2>
                </div>";

        $url = "$xml";
        $rss = simplexml_load_file($url);
        foreach ($rss->channel->item as $item)
        {
                $fluxrss.= '<div class="single_stuff_article">';
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M H\hi');
                if(!isset($item->enclosure))
                {
                $fluxrss.= '<div class="item">
                                <div class="single_stuff_img">
                                    <img src="https://dummyimage.com/493x278/a1a2a8/0a0a0a" alt="">
                                </div>
                                <div class="single_sarticle_inner">
                                    <a class="stuff_category" href="#"> '. $item->category .' </a>
                                    <div class="stuff_article_inner">
                                        <span class="stuff_date"><strong> '. $date .' </strong></span>
                                        <h2><a href=" '. $item->link .' "> '. $item->title .' </a></h2>
                                        <p> '. $item->description .' </p>
                                        <div class="social_area wow fadeInLeft">
                                            <ul>
                                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='. $item->link .'"><span class="fa fa-facebook"></span></a></li>
                                                <li><a target="_blank" href="https://twitter.com/share?text='.$item->title.'&url='.$item->link.'"> <span class="fa fa-twitter"></span></a></li>';

                                                if (isset($_SESSION["auth"]) && $_SESSION["auth"] == true)
                                                {
                                                    $fluxrss.= '<li><a href="'.BASE_URL.'/articles?link='.$item->link.'&titre='.$item->title.'"><i class="fa fa-star-o"></i></a></li>';
                                                }
                                            $fluxrss.= '</ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>';
                }
                else
                {
                $fluxrss.= '<div class="item">
                                <div class="single_stuff_img">
                                    <img src="'.$item->enclosure->attributes().'" alt="">
                                </div>
                                <div class="single_sarticle_inner">
                                    <a class="stuff_category" href="#"> '. $item->category .' </a>
                                    <div class="stuff_article_inner">
                                        <span class="stuff_date"><strong> '. $date .' </strong></span>
                                        <h2><a href=" '. $item->link .' "> '. $item->title .' </a></h2>
                                        <p> '. $item->description .' </p>
                                        <div class="social_area wow fadeInLeft">
                                            <ul>
                                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='. $item->link .'"><span class="fa fa-facebook"></span></a></li>
                                                <li><a target="_blank" href="https://twitter.com/share?text='.$item->title.'&url='.$item->link.'"> <span class="fa fa-twitter"></span></a></li>';

                                                if (isset($_SESSION["auth"]) && $_SESSION["auth"] == true)
                                                {
                                                    $fluxrss.= '<li><a href="'.BASE_URL.'/articles?link='.$item->link.'&titre='.$item->title.'"><i class="fa fa-star-o"></i></a></li>';
                                                }
                                            $fluxrss.= '</ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>';
                }
        }

        $fluxrss.= '</div>
                        </div>
                            </div>
                            </div>';

        return $fluxrss;

    }
}