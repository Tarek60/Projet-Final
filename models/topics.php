<?php

class topics extends dataBase {

// Déclaration des attributs de la table owprjt_topics
    public $id = 0;
    public $publicationDate  = '';
    public $title  = '';
    public $content  = '';
    public $id_owprjt_users  = 0;

    public function __construct() {
        parent::__construct();
    }
    
    
    
    public function __destruct() {
        parent::__destruct();
    }
}
