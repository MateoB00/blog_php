<?php require_once __DIR__ . '/parties/header.html.php';
?>

<h1><?= $article->titre ?></h1>

<div class="text-center">
    <img src="<?= $article->image ?>" class="rounded" alt="Image d'un article">
    <p><?= $article->contenu ?></p>
    <span><strong><?= mb_strtoupper($article->auteur) ?> </strong></span><br>
    <span>Ecrit le : <?= $article->date_de_publication ?></span>
</div>

<?php require_once __DIR__ . '/parties/footer.html.php';
?>