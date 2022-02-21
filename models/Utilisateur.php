<?php

require_once DOSSIER_MODEL . '/SimpleOrm.php';
class Utilisateur extends SimpleOrm
{

    public $id, $pseudo, $identifiant, $mot_de_passe, $role, $avatar;
}
