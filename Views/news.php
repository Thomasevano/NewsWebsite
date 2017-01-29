<div class="col-sm-12 col-md-3 col-lg-3">
    <div class="popular_categori">
        <h2 class="limeblue_bg">News Categorie</h2>
        <ul class="poplr_catgnva wow fadeInDown">
            <li><a href="javascript:visibilite('bfm');">BFMTV</a></li>
            <li><a href="javascript:visibilite('culture');">Culture</a></li>
            <li><a href="javascript:visibilite('football');">Football</a></li>
            <li><a href="javascript:visibilite('high-tech');">High-Tech</a></li>
            <li><a href="javascript:visibilite('jeux videos');">Jeux Videos</a></li>
            <li><a href="javascript:visibilite('le monde');">Le Monde</a></li>
            <li><a href="javascript:visibilite('sports');">Sports</a></li>
        </ul>
    </div>
</div>

<script type="text/javascript">

    //<![CDATA[

    function visibilite(id)	{

        var news_categorie = document.getElementsByTagName('div');

        for(var no=0;no<news_categorie.length;no++){

            if(news_categorie[ no].className == 'news_categorie'){ // on cible les divs dont la class est 'divs'

                news_categorie[ no].style.display = "none"; // on les masque tous

            }

        }

        document.getElementById(id).style.display = "block"; // on affiche le div appelé

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

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>