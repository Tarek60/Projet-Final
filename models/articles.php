<?php

class owprjt_articles extends dataBase {

    public $id = 0;
    public $publicationDate = '';
    public $title = '';
    public $picture = '';
    public $content = '';
    public $id_owprjt_users = 0;

    public function __construct() {
        parent::__construct();
    }

    public function createArticle() {
        $query = 'INSERT INTO `owprjt_articles` (`publicationDate`, `title`, `picture`, `content`, `id_owprjt_users`) VALUES (CURDATE(), :title, :picture, :content, :id_owprjt_users)';
        $createArticle = $this->db->prepare($query);
        $createArticle->bindValue('title', $this->title, PDO::PARAM_STR);
        $createArticle->bindValue('picture', $this->picture, PDO::PARAM_STR);
        $createArticle->bindValue('content', $this->content, PDO::PARAM_STR);
        $createArticle->bindValue('id_owprjt_users', $this->id_owprjt_users, PDO::PARAM_INT);
        return $createArticle->execute();
    }


    public function __destruct() {
        parent::__destruct();
    }

}

?>