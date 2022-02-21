<?php

if (!empty($_POST['mot_de_passe']) && !empty($_POST['identifiant'])) {

    include __DIR__ . '/../models/Utilisateur.php';
    $utilisateur = Utilisateur::retrieveByField('identifiant', $_POST['identifiant'], SimpleOrm::FETCH_ONE);

    if (!empty($utilisateur)) {
        $mdp = $utilisateur->mot_de_passe;
        if (password_verify($_POST['mot_de_passe'], $mdp)) {

            $_SESSION['pseudo'] = $utilisateur->pseudo;
            $_SESSION['id'] = $utilisateur->id;
            // $_SESSION['avatar'] = $utilisateur->avatar;

            redirection('home');
        }
        $error = 'Formulaire mal rempli';;
    }
}

require_once __DIR__ . '/../views/connexion.php';
