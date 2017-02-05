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
<h3>Vos articles: </h3>
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
        <table class="table table-striped custab">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Action</th>
            </tr>
            </thead>
            <?php include "Models/account.php";
            while ($art = $articles->fetch())
            {
            echo'<tr>
                <td><a href="'.$art['link'].'">'.$art['titre'].'</a></td>
                <td class="text-center"><a href="'.BASE_URL.'/delarticles?link='.$art['link'].'&titre='.$art['titre'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>';
            }
            ?>
        </table>
    </div>
</div>
<h3>Vos catégories préférées: </h3>
<form action="<?= BASE_URL; ?>/favoris" method="post">
        <div class="form-group">
            <ul class="list-group">
            <?php include 'Models/categorie.php';
            while ($categorie = $cat->fetch())
            {
                echo '<li class="list-group-item">
                        '.$categorie["titre"].'
                        <div class="material-switch pull-right">
                            <input  type="checkbox" id="'.$categorie["id_name"].'" name="chk[]" value="'.$categorie["titre"].'"/>
                            <label for="'.$categorie["id_name"].'" class="label-primary"></label>
                        </div>
                    </li>';
            }
            ?>
            </ul>
        </div>

        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
        <button type="submit" name="submit" class="btn btn-success">Valider</button>
</form>
