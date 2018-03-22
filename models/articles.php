<?php

class articles extends dataBase {

// Déclarations de attribut de la table owprjt_articles
    public $id = 0;
    public $publicationDate = '';
    public $title = '';
    public $picture = '';
    public $resume = '';
    public $content = '';
    public $id_owprjt_users = 0;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Cette méthode permet de créer un article via un formulaire
     * @return type
     */
    public function createArticle() {
        $query = 'INSERT INTO `' . TABLEPREFIX . 'articles` (`publicationDate`, `title`, `picture`, `resume`, `content`, `id_' . TABLEPREFIX . 'users`)'
                . ' VALUES (NOW(), :title, :picture, :resume, :content, :id_' . TABLEPREFIX . 'users)';
        $createArticle = $this->db->prepare($query);
        $createArticle->bindValue('title', $this->title, PDO::PARAM_STR);
        $createArticle->bindValue('picture', $this->picture, PDO::PARAM_STR);
        $createArticle->bindValue('resume', $this->resume, PDO::PARAM_STR);
        $createArticle->bindValue('content', $this->content, PDO::PARAM_STR);
        $createArticle->bindValue('id_owprjt_users', $this->id_owprjt_users, PDO::PARAM_INT);
        return $createArticle->execute();
    }

    /**
     * Cette méthode permet de récupérer la liste des articles dans la base de données, et les afficher
     * @return type
     */
    public function getListArticles() {
        $query = 'SELECT `id`, `publicationDate`, `title`, `picture`, `resume`, `content`, `id_owprjt_users` FROM `' . TABLEPREFIX . 'articles` ORDER BY `id` DESC';
        $queryResult = $this->db->query($query);
        if (is_object($queryResult)) {
            $articlesList = $queryResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $articlesList;
    }

    /**
     * Cette méthode permet de récupérer les info d'un article par rapport à son id 
     * @return type
     */
    public function getArticleById() {
        $query = 'SELECT `' . TABLEPREFIX . 'articles`.`id`,  DATE_FORMAT( `' . TABLEPREFIX . 'articles`.`publicationDate`, "%d/%m/%Y" ) AS `date`,'
                . ' DATE_FORMAT( `' . TABLEPREFIX . 'articles`.`publicationDate`, "%H:%i" ) AS `hour`,'
                . ' `' . TABLEPREFIX . 'articles`.`title`, `' . TABLEPREFIX . 'articles`.`picture`, `' . TABLEPREFIX . 'articles`.`resume`, `' . TABLEPREFIX . 'articles`.`content`, `'
                . TABLEPREFIX . 'articles`.`id_' . TABLEPREFIX . 'users`, `' . TABLEPREFIX . 'users`.`userName` FROM `' . TABLEPREFIX . 'articles`'
                . ' LEFT JOIN `' . TABLEPREFIX . 'users` ON `' . TABLEPREFIX . 'users`.`id` = `' . TABLEPREFIX . 'articles`.`id_' . TABLEPREFIX . 'users`'
                . ' WHERE `' . TABLEPREFIX . 'articles`.`id` = :id';
        $articleInfo = $this->db->prepare($query);
        $articleInfo->bindValue(':id', $this->id, PDO::PARAM_INT);
        $articleInfo->execute();
        return $articleInfo->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Cette méthode permet de modifier un article 
     * @return boolean
     */
    public function updateArticle() {
        $query = 'UPDATE `' . TABLEPREFIX . 'articles` SET `title` = :title, `picture` = :picture, `resume` = :resume, `content` = :content WHERE `id` = :id';
        $updateArticle = $this->db->prepare($query);
        $updateArticle->bindValue('title', $this->title, pdo::PARAM_STR);
        $updateArticle->bindValue('picture', $this->picture, pdo::PARAM_STR);
        $updateArticle->bindValue('resume', $this->resume, pdo::PARAM_STR);
        $updateArticle->bindValue('content', $this->content, pdo::PARAM_STR);
        $updateArticle->bindValue('id', $this->id, pdo::PARAM_INT);
        return $updateArticle->execute();
    }

    /**
     * Cette méthode permet de supprimer un article
     * @return boolean
     */
    public function deleteArticle() {
        $query = 'DELETE FROM `' . TABLEPREFIX . 'articles` WHERE `id` = :id';
        $deleteArticle = $this->db->prepare($query);
        $deleteArticle->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $deleteArticle->execute();
    }

    public function __destruct() {
        parent::__destruct();
    }

}
