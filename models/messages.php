<?php

class messages extends dataBase {

// Déclaration des attributs de la table owprjt_messages
    public $id = 0;
    public $publicationDate = '';
    public $content = '';
    public $id_owprjt_users = 0;

    public function __construct() {
        parent::__construct();
    }
    
    
    
    public function __destruct() {
        parent::__destruct();
    }
}
