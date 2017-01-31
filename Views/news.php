<?php

echo Flux::fluxrss("bfm", "block", "BFM", "http://www.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/");

echo Flux::fluxrss("culture", "none", "Culturelle", "http://www.lemonde.fr/culture/rss_full.xml");

echo Flux::fluxrss("football", "none", "Footbalistique", "http://www.lequipe.fr/rss/actu_rss_Football.xml");

echo Flux::fluxrss("high-tech", "none", "High-Tech", "http://www.clubic.com/articles.rss");

echo Flux::fluxrss("jeux video", "none", "Jeux-Videoludique", "http://www.jeuxvideo.com/rss/rss.xml");

echo Flux::fluxrss("le monde", "none", "Le Monde", "http://www.lemonde.fr/rss/une.xml");

echo Flux::fluxrss("sports", "none", "Sportive", "http://www.lequipe.fr/rss/actu_rss.xml");

echo Flux::fluxrss("les echos", "none", "Les Echos", "http://www.lesechos.fr/rss/rss_articles_journal.xml");


include 'Views/categorie.php';

?>

<script type="text/javascript">

    //<![CDATA[

    function visibilite(id)
    {
        var news_categorie = document.getElementsByTagName('div');

        for (var no=0;no<news_categorie.length;no++)
        {
            if(news_categorie[ no].className == 'news_categorie')
            {
                news_categorie[ no].style.display = "none";
            }
        }
        document.getElementById(id).style.display = "block";
    }

    //]]>

</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            $.ajax({
                url: "<?= BASE_URL; ?>/news.php?News=" + $(".item:last").attr("item"),
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
