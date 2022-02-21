<?php require_once DOSSIER_VIEW . "/parties/header.html.php";
?>

<h1><?= $article->titre ?></h1>

<div class="text-center">
    <img src="<?= $article->image ?>" class="rounded" alt="Image d'un article">
    <p><?= $article->contenu ?></p>
    <span><strong><?= mb_strtoupper($article->auteur) ?> </strong></span><br>
    <span>Ecrit le : <?= $article->date_de_publication ?></span>
</div>

<h3>Nos commentaires :</h3>

<?php foreach ($commentaires as $commentaire) { ?>
    <p>ID_Utilisateur : <?= $commentaire->id_utilisateur ?></p>
    <p>Commentaire : <?= $commentaire->contenu ?></p>
    <div>Date du commentaire : <strong><?= mb_strtoupper($commentaire->date_publication) ?></strong></div></br>
<?php } ?>

<?php require_once DOSSIER_VIEW . "/parties/footer.html.php";
?>