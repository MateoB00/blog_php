<?php

require_once DOSSIER_MODEL . '/SimpleOrm.php';

class Commentaire extends SimpleOrm
{

    public $id, $id_utilisateur, $id_article, $contenu, $date_publication;
}
