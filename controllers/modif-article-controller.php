
<?php

if (empty($_GET['id'])) error();

require_once __DIR__ . '/../models/Article.php';
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) error();

if (!empty($_POST)) {

    if (
        !empty($_POST['titre'])
        && !empty($_POST['contenu'])
        && !empty($_POST['image'])
        && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
        && !empty($_POST['auteur'])
        && !empty($_POST['date_de_publication'])
        && validateDate($_POST['date_de_publication'])
        && (substr($_POST['image'], -4) == '.jpg' || substr($_POST['image'], -4) == '.png' || substr($_POST['image'], -5) == '.jpeg' || substr($_POST['image'], -4) == '.gif')

    ) {
        $article->titre = $_POST['titre'];
        $article->contenu = $_POST['contenu'];
        $article->image = $_POST['image'];
        $article->auteur = $_POST['auteur'];
        $article->date_de_publication = $_POST['date_de_publication'];

        $article->save();

        redirection("home");
    } else error();
}

require_once __DIR__ . '/../views/modif-article.html.php';
