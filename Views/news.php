<?php

echo Flux::fluxrss("bfm", "BFM", "http://www.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/");

echo Flux::fluxrss("le-monde-culture", "Culturelle", "http://www.lemonde.fr/culture/rss_full.xml");

echo Flux::fluxrss("football", "Footbalistique", "http://www.lequipe.fr/rss/actu_rss_Football.xml");

echo Flux::fluxrss("jeux-video", "Jeux-Videoludique", "http://www.jeuxvideo.com/rss/rss.xml");

echo Flux::fluxrss("le-monde", "Le Monde", "http://www.lemonde.fr/rss/une.xml");

echo Flux::fluxrss("sports", "Sportive", "http://www.lequipe.fr/rss/actu_rss.xml");

echo Flux::fluxrss("le-monde-technologies", "Le Monde Technologies", "http://www.lemonde.fr/technologies/rss_full.xml");


include 'Views/categorie.php';

?>


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
