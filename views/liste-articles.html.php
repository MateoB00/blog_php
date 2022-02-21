<?php
require_once DOSSIER_VIEW . "/parties/header.html.php";; ?>

<h1>Nos Articles !</h1>

<?php
foreach ($articles as $article) { ?>

    <div class="card d-inline-flex" style="width: 18rem;">
        <img class="card-img-top" src="<?= $article->image ?>" alt="Image de l'article">
        <div class="card-body">
            <h5 class="card-title"><?= $article->titre ?></h5>
            <p class="card-text"><?php $contenu = $article->contenu;
                                    echo substr($contenu, 0, 120) ?> ...</p>
            <span><strong><?= mb_strtoupper($article->auteur) ?> </strong></span><br>
            <span>Ecrit le : <?= $article->date_de_publication ?></span>
            <a href="<?= url('article') ?>&id=<?= $article->id ?>" class="btn btn-info">L'article en profondeur</a>
            <a href="<?= url('modif') ?>&id=<?= $article->id ?>" class="btn btn-warning">Modifie ton article</a>
            <a href="<?= url('suppr') ?>&id=<?= $article->id ?>" class="btn btn-danger">-> Poubelle</a>
        </div>
    </div>

<?php } ?>
<?php
require_once DOSSIER_VIEW . "/parties/footer.html.php";
