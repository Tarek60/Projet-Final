<?php

class owprjt_reaction extends dataBase {

// Déclaration des attributs de la table owprjt_reaction
    public $id = 0;
    public $id_owprjt_comments  = 0;
    public $id_owprjt_users  = 0;
    public $id_owprjt_reactionTypes  = 0;

    public function __construct() {
        parent::__construct();
    }
    
    
    
    public function __destruct() {
        parent::__destruct();
    }
}
