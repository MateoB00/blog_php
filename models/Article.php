<?php

require_once DOSSIER_MODEL . '/SimpleOrm.php';

class Article extends SimpleOrm
{

    public $id, $auteur, $image, $titre, $contenu, $date_de_publication;
}
