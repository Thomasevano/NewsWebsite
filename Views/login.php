<form action="<?= BASE_URL; ?>/login" method="post">
    <div class="col-lg-5 col-lg-offset-4">
        <h2>Connexion</h2>

        <div class="form-group">
            <!--<label for="contact_email">Email:</label>-->
            <input type="text" id="login" name="login" class="form-control" placeholder="Login"/>
        </div>
        <div class="form-group">
            <!--<label for="contact_subject">Subject:</label>-->
            <input type="password" id="mdp" name="mdp" class="form-control" placeholder="************"/>
        </div>
        <button type="submit" name="submit" class="btn btn-warning pull-right">Valider</button>
</form>
