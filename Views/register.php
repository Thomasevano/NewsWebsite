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
                <label>BFMTV
                    <input type="checkbox" id="bfm" name="bfm">
                </label>
                <label>Culture
                    <input type="checkbox" id="culture" name="culture">
                </label>
                <label>Football
                    <input type="checkbox" id="foot" name="foot">
                </label>
                <label>Hight-Tech
                    <input type="checkbox" id="high-tech" name="high-tech">
                </label>
                <label>Jeux Videos
                    <input type="checkbox" id="jeux videos" name="jeux videos">
                </label>
                <label>Le Monde
                    <input type="checkbox" id="le monde" name="le monde">
                </label>
                <label>Sports
                    <input type="checkbox" id="sports" name="sports">
                </label>
        </div>

    <button type="submit" name="submit" class="btn btn-warning pull-right">Valider</button>
</form>