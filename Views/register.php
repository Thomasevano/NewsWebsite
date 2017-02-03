<form action="<?= BASE_URL; ?>/register" method="post">
    <div class="col-lg-5 col-lg-offset-4">
        <h2>Inscription</h2>

        <div class="form-group">
            <input type="email" id="mail" name="mail" class="form-control" placeholder="Email" required/>
        </div>
        <div class="form-group">
            <input type="text" id="login" name="login" class="form-control" placeholder="Login" required/>
        </div>
        <div class="form-group">
            <input type="password" id="mdp" name="mdp" class="form-control" placeholder="**********" required/>
        </div>

        <hr>
        <h3>Choississez les news que vous voulez suivre</h3><br>

        <div class="form-group">
            <?php include 'Models/categorie.php';
            while ($categorie = $cat->fetch())
            {
                echo '<label>' . $categorie["titre"] . ' <input type="checkbox" id="' . $categorie["id_name"] . '" name="' . $categorie["id_name"] . '"></label>';
                /*echo '</br>';*/
            }
            ?>
        </div>

        <button type="submit" name="submit" class="btn btn-warning pull-right">Valider</button>
</form>