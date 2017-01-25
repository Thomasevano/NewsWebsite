<form action="<?= BASE_URL; ?>/register" method="post">
    <div class="col-lg-5 col-lg-offset-4">
        <h2>Inscription</h2>

        <div class="form-group">
            <input type="email" id="mail" name="mail" class="form-control" placeholder="Email"/>
        </div>
        <div class="form-group">
            <input type="text" id="login" name="login" class="form-control" placeholder="Login"/>
        </div>
        <div class="form-group">
            <input type="password" id="mdp" name="mdp" class="form-control" placeholder="**********"/>
        </div>

        <hr>
        <h4>Choississez 3 catégories que vous voulez suivre</h4><br>

        <div class="form-group">
            <label>Categorie 1
                <select class="form-control">
                    <option></option>
                    <option>BFMTV</option>
                    <option>Culture</option>
                    <option>Football</option>
                    <option>Hight-Tech</option>
                    <option>Jeux Videos</option>
                    <option>Le Monde</option>
                    <option>Sports</option>
                </select>
            </label>
        </div>

        <div class="form-group">
            <label>Categorie 2
                <select class="form-control">
                    <option></option>
                    <option>BFMTV</option>
                    <option>Culture</option>
                    <option>Football</option>
                    <option>Hight-Tech</option>
                    <option>Jeux Videos</option>
                    <option>Le Monde</option>
                    <option>Sports</option>
                </select>
            </label>
        </div>

        <div class="form-group">
            <label>Categorie 3
                <select class="form-control">
                    <option></option>
                    <option>BFMTV</option>
                    <option>Culture</option>
                    <option>Football</option>
                    <option>Hight-Tech</option>
                    <option>Jeux Videos</option>
                    <option>Le Monde</option>
                    <option>Sports</option>
                </select>
            </label>
        </div>
        <button type="submit" name="submit" class="btn btn-warning pull-right">Valider</button>
</form>