
<?php

require_once DOSSIER_MODEL . "/Article.php";
$articles = Article::all();
require_once DOSSIER_VIEW . "/liste-articles.html.php";
