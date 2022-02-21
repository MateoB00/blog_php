<?php

session_start();

define('DOSSIER_CONTROLLER', __DIR__ . '/controllers');
define('DOSSIER_VIEW', __DIR__ . '/views');
define('DOSSIER_MODEL', __DIR__ . '/models');
define('DOSSIER_ASSETS', __DIR__ . '/assets');

require_once __DIR__ . '/fonctions.php';

connexionBDD();


if (!empty($_GET["route"])) $route = $_GET["route"];
else $route = "home";


switch ($route) {
    case 'home':
        include DOSSIER_CONTROLLER . '/home-controller.php';
        break;
    case 'liste-articles':
        include DOSSIER_CONTROLLER . '/liste-articles-controller.php';
        break;
    case 'article':
        include DOSSIER_CONTROLLER . '/article-controller.php';
        break;
    case 'ajout':
        include DOSSIER_CONTROLLER . '/ajout-article-controller.php';
        break;
    case 'modif':
        include DOSSIER_CONTROLLER . '/modif-article-controller.php';
        break;
    case 'suppr':
        include DOSSIER_CONTROLLER . '/suppr-article-controller.php';
        break;
    case 'connexion':
        include DOSSIER_CONTROLLER . '/connexion-controller.php';
        break;
    case 'deconnexion':
        include DOSSIER_CONTROLLER . '/deconnexion-controller.php';
        break;

    default:
        error();
}
