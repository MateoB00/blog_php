<?php


if (!empty($_POST)) {
    if (
        !empty($_POST['pseudo'])
        && !empty($_POST['identifiant'])
        && !empty($_POST['mot_de_passe'])
        && filter_var($_POST['avatar'], FILTER_VALIDATE_URL) !== false
        && (substr($_POST['avatar'], -4) == '.jpg' || substr($_POST['image'], -4) == '.png' || substr($_POST['image'], -5) == '.jpeg' || substr($_POST['image'], -4) == '.gif')
    ) {

        require_once DOSSIER_MODEL . '/Utilisateur.php';
        $utilisateur = new Utilisateur;
        $utilisateur->pseudo = $_POST['pseudo'];
        $utilisateur->identifiant = $_POST['identifiant'];
        $utilisateur->avatar = $_POST['avatar'];
        $mdp2 = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
        $utilisateur->mot_de_passe = $mdp2;

        $utilisateur->save();
        redirection("connexion");
    } else $error = "Vous avez mal rempli le formulaire";
}

require_once DOSSIER_VIEW . '/inscription.html.php';
