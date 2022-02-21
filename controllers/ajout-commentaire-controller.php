<?php

if (!empty($_POST) && !empty($_SESSION['id']) && !empty($_GET['id'])) {
    if (!empty($_POST['commentaireContenu'])) {
        require_once DOSSIER_MODEL . '/Commentaire.php';
        $commentaire = new Commentaire;
        $commentaire->contenu = $_POST['commentaireContenu'];
        $commentaire->date_publication = date("Y-m-d H:i:s");
        $commentaire->id_utilisateur = $_SESSION['id'];
        $commentaire->id_article = $_GET['id'];

        $commentaire->save();
        redirection("article" . '&id=' . $_GET['id']);
    }
} else echo "Veuillez vous connecter pour écrire un commentaire";
