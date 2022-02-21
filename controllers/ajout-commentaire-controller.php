<?php

if (!empty($_POST) && !empty($_SESSION['id'])) {
    if (!empty($_POST['commentaireContenu']) && !empty($_POST['date_publication']) && validateDate($_POST['date_publication'])) {
        require_once DOSSIER_MODEL . '/Commentaire.php';
        $commentaire = new Commentaire;
        $commentaire->contenu = $_POST['commentaireContenu'];
        $commentaire->date_publication = $_POST['date_publication'];
        $commentaire->id_utilisateur = $_SESSION['id'];
        $commentaire->id_article = $_GET['id'];

        $commentaire->save();
        redirection("article" . '&id=' . $_GET['id']);
    }
} else echo "Veuillez vous connecter pour écrire un commentaire";
