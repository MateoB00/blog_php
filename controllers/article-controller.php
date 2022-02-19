
<?php

if (empty($_GET["id"])) error();

require_once __DIR__ . '/../models/Article.php';

$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) error();

require_once __DIR__ . '/../views/article.html.php';
