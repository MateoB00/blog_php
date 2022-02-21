<?php
if (empty($_GET["id"])) error();
require_once DOSSIER_MODEL . '/Article.php';
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) error();
$article->delete();

redirection("liste-articles");
