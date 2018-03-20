<?php

class profilePicture extends dataBase {

    // Déclarations des attibut de la table owprjt_profilePicture
    public $id = 0;
    public $picProfileName = '';

    public function __construct() {
        parent::__construct();
    }

    /**
     * Cette méthode permet d'ajouter une image de profil via un formulaire
     * @return type
     */
    public function addPicture() {
        $query = 'INSERT INTO `' . TABLEPREFIX . 'profilePicture` (`picProfileName`) VALUES (:name)';
        $addPicture = $this->db->prepare($query);
        $addPicture->bindValue('name', $this->name, PDO::PARAM_STR);
        return $addPicture->execute();
    }

    /**
     * Cette méthode permet d'afficher la liste des images de profil
     * @return type
     */
    public function listPicturesById() {
        $listPictures = array();
        $query = 'SELECT `id`, `picProfileName` FROM `' . TABLEPREFIX . 'profilePicture` ORDER BY `picProfileName` ASC';
        $result = $this->db->query($query);
        if (is_object($result)) {
            $listPictures = $result->fetchAll(PDO::FETCH_OBJ);
        }
        return $listPictures;
    }

    public function getPictureById() {
        $query = 'SELECT `id` FROM `' . TABLEPREFIX . 'profilePicture` WHERE `picProfileName` = :picture';
        $pictureProfile = $this->db->prepare($query);
        $pictureProfile->bindValue(':picture', $this->name, PDO::PARAM_STR);
        $pictureProfile->execute();
        return $pictureProfile->fetch(PDO::FETCH_OBJ);
    }

    public function __destruct() {
        parent::__destruct();
    }

}

?>