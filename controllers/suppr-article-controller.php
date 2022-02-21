<?php
if (empty($_GET["id"])) error();
require_once DOSSIER_MODEL . '/Article.php';
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) error();

if ($_SESSION['role'] == "admin") {
    $article->delete();
    redirection("liste-articles");
} else redirection("liste-articles");
