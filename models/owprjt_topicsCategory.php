<?php

class owprjt_topicsCategory extends dataBase {

// Déclaration des attributs de la table owprjt_topicsCategory
    public $id = 0;
    public $title  = '';
    public $id_owprjt_topics = 0;

    public function __construct() {
        parent::__construct();
    }
    
    
    
    public function __destruct() {
        parent::__destruct();
    }
}
