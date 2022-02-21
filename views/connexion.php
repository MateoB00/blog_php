<?php require_once DOSSIER_VIEW . "/parties/header.html.php";

?>


<h1>Se connecter</h1>

<form method="post">
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oups !</strong> <?= $error ?>
        </div>
    <?php } ?>

    <div class="form-group row">
        <label for="identifiant" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="identifiant" id="identifiant" placeholder="Identifiant">
        </div>
    </div>

    <div class="form-group row">
        <label for="mot_de_passe" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe" placeholder="Mot de passe">
        </div>
    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="cookieID" id="cookieID" value="true"> Cookie-ID
        </label>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </div>
</form>
<a class="nav-link" href="<?= url("inscription") ?>">S'inscrire</a>

<?php require_once DOSSIER_VIEW . "/parties/footer.html.php"; ?>