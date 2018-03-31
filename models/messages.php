<?php

class messages extends dataBase {

// Déclaration des attributs de la table owprjt_messages
    public $id = 0;
    public $publicationDate = '';
    public $content = '';
    public $id_owprjt_users = 0;

    public function __construct() {
        parent::__construct();
        $this->connectDB();
    }
    
    /**
     * Cette méthode permet de stocker le message envoyer par l'utilisateur
     * @return type
     */
    public function addMessage() {
        $query = 'INSERT INTO owprjt_messages (`publicationDate`, `content`, `id_owprjt_users`) VALUES (NOW(), :content, :user)';
        $addMessage = $this->pdo->prepare($query);
        $addMessage->bindValue(':content', $this->content, PDO::PARAM_STR);
        $addMessage->bindValue(':user', $this->id_owprjt_users, PDO::PARAM_INT);
        return $addMessage->execute();
    }
    
    /**
     * Cette méthode permet d'afficher la liste des messages
     * @return type
     */
    public function getMessagesList() {
        $query = 'SELECT `owprjt_messages`.`id`, `publicationDate`, `content`, `id_owprjt_users`, `owprjt_users`.`userName`, `owprjt_profilePicture`.`picProfileName`'
                . ' FROM `owprjt_messages`'
                . ' LEFT JOIN `owprjt_users` ON `owprjt_messages`.`id_owprjt_users` = `owprjt_users`.`id`'
                . ' LEFT JOIN `owprjt_profilePicture` ON `owprjt_users`. `id_owprjt_profilePicture` = `owprjt_profilePicture`.`id`'
                . ' ORDER BY `publicationDate` ASC';
        $messagesList = $this->pdo->query($query);
        $messagesList = $messagesList->fetchAll(PDO::FETCH_OBJ);
        return $messagesList;
    }
    
    public function __destruct() {
        parent::__destruct();
    }
}
