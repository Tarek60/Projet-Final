<?php

class owprjt_comments extends dataBase {

// Déclaration des attributs de la table owprjt_comments
    public $id = 0;
    public $publicationDate = '';
    public $content = '';
    public $id_owprjt_articles = 0;
    public $id_owprjt_users = 0;

    public function __construct() {
        parent::__construct();
    }
    
    public function addComment() {
        $query = 'INSERT INTO `owprjt_comments` (`publicationDate`, `content`, `id_'.SELF::prefix.'articles`, `id_'.SELF::prefix.'users`) VALUES (NOW(), :comment, :article, :user)';
        $addComment = $this->db->prepare($query);
        $addComment->bindValue(':comment', $this->content, PDO::PARAM_STR);
        $addComment->bindValue(':article', $this->id_owprjt_articles, PDO::PARAM_INT);
        $addComment->bindValue(':user', $this->id_owprjt_users, PDO::PARAM_INT);
        return $addComment->execute();
    }

    public function showComments() {
        
    }
    
    public function __destruct() {
        parent::__destruct();
    }
}
