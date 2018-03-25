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
    
    /**
     * Cette méthode permet d'ajouter un commentaire à un article
     * @return bool
     */
    public function addComment() {
        $query = 'INSERT INTO `' . TABLEPREFIX . 'comments` (`publicationDate`, `content`, `id_' . TABLEPREFIX . 'articles`, `id_' . TABLEPREFIX . 'users`) VALUES (NOW(), :comment, :article, :user)';
        $addComment = $this->db->prepare($query);
        $addComment->bindValue(':comment', $this->content, PDO::PARAM_STR);
        $addComment->bindValue(':article', $this->id_owprjt_articles, PDO::PARAM_INT);
        $addComment->bindValue(':user', $this->id_owprjt_users, PDO::PARAM_INT);
        return $addComment->execute();
    }
    
    /**
     * Cette méthode permet d'afficher les commentaires dans un article
     * @return bool
     */
    public function showComments() {
        $query = 'SELECT `' . TABLEPREFIX . 'comments`.`id` AS id, DATE_FORMAT(`' . TABLEPREFIX . 'comments`.`publicationDate`, "%d/%m/%Y" ) AS `date`,'
                . ' DATE_FORMAT(`' . TABLEPREFIX . 'comments`.`publicationDate`, "%H:%i" ) AS `hour`, `' . TABLEPREFIX . 'comments`.`content`,'
                . ' `' . TABLEPREFIX . 'comments`.`id_' . TABLEPREFIX . 'articles`, `' . TABLEPREFIX . 'comments`.`id_' . TABLEPREFIX . 'users`,'
                . ' `' . TABLEPREFIX . 'comments`.`id_1`, `' . TABLEPREFIX . 'users`.`userName`, `' . TABLEPREFIX . 'profilePicture`.`picProfileName`'
                . ' FROM `' . TABLEPREFIX . 'comments`'
                . ' LEFT JOIN `' . TABLEPREFIX . 'articles` ON `' . TABLEPREFIX . 'comments`.`id_' . TABLEPREFIX . 'articles` = `' . TABLEPREFIX . 'articles`.`id`'
                . ' LEFT JOIN `' . TABLEPREFIX . 'users` ON `' . TABLEPREFIX . 'comments`.`id_' . TABLEPREFIX . 'users` = `' . TABLEPREFIX . 'users`.`id`'
                . ' LEFT JOIN `' . TABLEPREFIX . 'profilePicture` ON `' . TABLEPREFIX . 'users`.`id_' . TABLEPREFIX . 'profilePicture` = `' . TABLEPREFIX . 'profilePicture`.`id`'
                . ' WHERE `' . TABLEPREFIX . 'comments`.`id_' . TABLEPREFIX . 'articles` = :id ORDER BY `id` ASC';
        $showComments = $this->db->prepare($query);
        $showComments->bindValue(':id', $this->id_owprjt_articles, PDO::PARAM_INT);
        $showComments->execute();
        return $showComments->fetchAll(PDO::FETCH_OBJ);
    }
    
    /**
     * Cette méthode permet de compter le nombre de commentaire dans un article
     * @return array
     */
    public function countNumberComments() {
        $query = 'SELECT COUNT(`id`) as nbComments FROM `' . TABLEPREFIX . 'comments` WHERE `id_' . TABLEPREFIX . 'articles` = :id ';
        $numberComments = $this->db->prepare($query);
        $numberComments->bindValue(':id', $this->id_owprjt_articles, PDO::PARAM_INT);
        $numberComments->execute();
        return $numberComments->fetch(PDO::FETCH_OBJ);
    }
    
    /**
     * Cette méthode permet de supprimer un commentaire
     * @return bool
     */
    public function deleteComment() {
        $query = 'DELETE FROM `' . TABLEPREFIX . 'comments` WHERE `id` = :id';
        $deleteComment = $this->db->prepare($query);
        $deleteComment->bindValue('id', $this->id, PDO::PARAM_INT);
        return $deleteComment->execute();
    }

    public function __destruct() {
        parent::__destruct();
    }

}
