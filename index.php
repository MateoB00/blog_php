<?php

require_once __DIR__ . '/fonctions.php';

connexionBDD();


if (!empty($_GET["route"])) $route = $_GET["route"];
else $route = "home";


switch ($route) {
    case 'home':
        include __DIR__ . '/controllers/home-controller.php';
        break;
    case 'liste-articles':
        include __DIR__ . '/controllers/liste-articles-controller.php';
        break;
    case 'article':
        include __DIR__ . '/controllers/article-controller.php';
        break;
    case 'ajout':
        include __DIR__ . '/controllers/ajout-article-controller.php';
        break;
    case 'modif':
        include __DIR__ . '/controllers/modif-article-controller.php';
        break;
    case 'suppr':
        include __DIR__ . '/controllers/suppr-article-controller.php';
        break;

    default:
        error();
}
