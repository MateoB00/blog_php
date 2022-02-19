<?php

require_once __DIR__ . "/parties/header.html.php";

?>

<h1>Ajoute un article</h1>


<form method="post">
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oups !</strong> <?php echo $error ?>
        </div>
    <?php } ?>

    <div class="form-group row">
        <label for="titre" class="col-12 col-form-label">Titre de l'article</label>
        <div class="col-12">
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre de l'article" required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="contenu" class="col-12 col-form-label">Contenu de l'article</label>
        <div class="col-12">
            <input type="text" class="form-control" name="contenu" id="contenu" placeholder="Veuillez saisir le contenu de l'article ( Mini 150 caractères )" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="image" class="col-12 col-form-label">Image qui représente le contenu</label>
        <div class="col-12">
            <input type="img" class="form-control" name="image" id="image" placeholder="Veuillez saisir l'URL de l'image" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="auteur" class="col-12 col-form-label">Auteur</label>
        <div class="col-12">
            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="Auteur" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-12 col-form-label">Date de publication</label>
        <div class="col-12">
            <input type="date" class="form-control" name="date_de_publication" id="date" required>
        </div>
    </div>

    <div class="form-group row">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>

</form>

<?php include __DIR__ . '/parties/footer.html.php';
