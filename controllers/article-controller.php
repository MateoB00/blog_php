
<?php

if (empty($_GET["id"])) error();

require_once DOSSIER_MODEL . '/Article.php';
require_once DOSSIER_MODEL . '/Commentaire.php';



$article = Article::retrieveByPK($_GET['id']);
$commentaires = Commentaire::retrieveByid_article($_GET['id']);

if (empty($article)) error();

require_once DOSSIER_VIEW . '/article.html.php';
