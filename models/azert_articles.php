<?php

class azert_articles extends dataBase {

    public $id = 0;
    public $publicationDate = '';
    public $title = '';
    public $picture = '';
    public $content = '';

    public function __construct() {
        parent::__construct();
    }

    public function createArticle() {
        $query = 'INSERT INTO `azert_articles`(`title`, `picture`, `content`) VALUES(:title, :picture, :content)';
        $createArticle = $this->db->prepare($query);
        $createArticle->bindValue('title', $this->title, PDO::PARAM_STR);
        $createArticle->bindValue('picture', $this->picture, PDO::PARAM_STR);
        $createArticle->bindValue('content', $this->content, PDO::PARAM_STR);
        return $createArticle->execute();
    }


    public function __destruct() {
        parent::__destruct();
    }

}

?>