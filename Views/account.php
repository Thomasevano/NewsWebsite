<div class="container-fluid well span6">
    <div class="row-fluid">
        <div class="span2" >
            <img src="https://www.kirkleescollege.ac.uk/wp-content/uploads/2015/09/default-avatar.png" class="img-circle" width="140" height="140">
        </div>

        <div class="span8">
            <h3><?= $_SESSION['login'] ?></h3>
            <h6>Email: <?= $_SESSION['mail'] ?></h6>
        </div>
    </div>
</div>
<h3>Vos catégories préférées sont: </h3>
<form action="<?= BASE_URL; ?>/account" method="post">
        <div class="form-group">
            <?php include 'Models/categorie.php';
            echo'<ul class="list-group">';
            while ($categorie = $cat->fetch())
            {
                echo '<li class="list-group-item">
                        '.$categorie["titre"].'
                        <div class="material-switch pull-right">
                            <input id="'.$categorie["id_name"].'" name="'.$categorie["id_name"].'" value="'.$categorie["titre"].'" type="checkbox"/>
                            <label for="'.$categorie["id_name"].'" class="label-primary"></label>
                        </div>
                    </li>';
            }
            echo '</ul>';
            ?>
        </div>

        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
        <button type="submit" name="submit" class="btn btn-success">Valider</button>
</form>
