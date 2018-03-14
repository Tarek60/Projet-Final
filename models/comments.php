<?php

class comments extends dataBase {

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
        $query = 'INSERT INTO `owprjt_comments` (`publicationDate`, `content`, `id_' . SELF::prefix . 'articles`, `id_' . SELF::prefix . 'users`) VALUES (NOW(), :comment, :article, :user)';
        $addComment = $this->db->prepare($query);
        $addComment->bindValue(':comment', $this->content, PDO::PARAM_STR);
        $addComment->bindValue(':article', $this->id_owprjt_articles, PDO::PARAM_INT);
        $addComment->bindValue(':user', $this->id_owprjt_users, PDO::PARAM_INT);
        return $addComment->execute();
    }

    public function showComments() {
        $query = 'SELECT `owprjt_comments`.`id`, DATE_FORMAT(`owprjt_comments`.`publicationDate`, "%d/%m/%Y" ) AS `date`, DATE_FORMAT(`owprjt_comments`.`publicationDate`, "%H:%i" ) AS `hour`, `owprjt_comments`.`content`, `owprjt_comments`.`id_owprjt_articles`, `owprjt_comments`.`id_owprjt_users`, `owprjt_comments`.`id_1`, `owprjt_users`.`userName`, `owprjt_profilePicture`.`picProfileName`'
                . ' FROM `owprjt_comments` LEFT JOIN `owprjt_articles` ON `owprjt_comments`.`id_owprjt_articles` = `owprjt_articles`.`id`'
                . ' LEFT JOIN `owprjt_users` ON `owprjt_comments`.`id_owprjt_users` = `owprjt_users`.`id`'
                . ' LEFT JOIN `owprjt_profilePicture` ON `owprjt_users`.`id_owprjt_profilePicture` = `owprjt_profilePicture`.`id`'
                . ' WHERE `owprjt_comments`.`id_owprjt_articles` = :id ORDER BY `id` ASC';
        $showComments = $this->db->prepare($query);
        $showComments->bindValue(':id', $this->id_owprjt_articles, PDO::PARAM_INT);
        $showComments->execute();
        return $showComments->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function countNumberComments() {
        $query = 'SELECT COUNT(`id`) as nbComments FROM `owprjt_comments` WHERE `id_owprjt_articles` = :id ';
        $numberComments = $this->db->prepare($query);
        $numberComments->bindValue(':id', $this->id_owprjt_articles, PDO::PARAM_INT);
        $numberComments->execute();
        return $numberComments->fetch(PDO::FETCH_OBJ);
    }


    public function __destruct() {
        parent::__destruct();
    }

}
