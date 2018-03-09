<?php

class owprjt_responses extends dataBase {

// Déclaration des attributs de la table owprjt_reaction
    public $id = 0;
    public $publicationDate  = '';
    public $content  = '';
    public $id_owprjt_topics = 0;
    public $id_owprjt_users = 0;

    public function __construct() {
        parent::__construct();
    }
    
    
    
    public function __destruct() {
        parent::__destruct();
    }
}
