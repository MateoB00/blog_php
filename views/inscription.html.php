<?php

require_once DOSSIER_VIEW . "/parties/header.html.php";

?>

<h1>Ajoute un article</h1>


<form method="post">
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oups !</strong> <?php echo $error ?>
        </div>
    <?php } ?>

    <div class="form-group row">
        <label for="identifiant" class="col-12 col-form-label">Identifiant :</label>
        <div class="col-12">
            <input type="text" class="form-control" name="identifiant" id="identifiant" placeholder="Votre identifiant" required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="pseudo" class="col-12 col-form-label">Pseudo :</label>
        <div class="col-12">
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Veuillez saisir votre pseudo" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="avatar" class="col-12 col-form-label">Avatar :</label>
        <div class="col-12">
            <input type="img" class="form-control" name="avatar" id="avatar" placeholder="Veuillez saisir l'URL de votre avatar" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="mot_de_passe" class="col-12 col-form-label">Mot de passe</label>
        <div class="col-12">
            <input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe" placeholder="Mot de passe" required>
        </div>
    </div>
    <div class="form-group row">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>

</form>

<?php require_once DOSSIER_VIEW . "/parties/footer.html.php";
