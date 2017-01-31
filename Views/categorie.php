<?php

include 'Models/categorie.php';

echo '<div class="col-sm-12 col-md-3 col-lg-3">
            <div class="popular_categori">
                <h2 class="limeblue_bg">News Categorie</h2>
                <ul class="poplr_catgnva wow fadeInDown">';
                while ($categorie = $cat->fetch())
                {
                    echo '<li><a href="javascript:visibilite('.$categorie["id_name"].');">'.$categorie["titre"].'</a></li>';
                }
echo '        </ul>
            </div>
      </div>';