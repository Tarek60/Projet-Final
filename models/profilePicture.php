<?php

class profilePicture extends dataBase {

    // Déclarations des attibut de la table owprjt_profilePicture
    public $id = 0;
    public $picProfileName = '';

    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Cette méthode permet d'afficher la liste des images de profil
     * @return array
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
    
    /**
     * Cette méthode permet d'afficher la photo de profil de l'utilisateur
     * @return array
     */
    public function getPictureById() {
        $query = 'SELECT `id` FROM `' . TABLEPREFIX . 'profilePicture` WHERE `picProfileName` = :picture';
        $pictureProfile = $this->db->prepare($query);
        $pictureProfile->bindValue(':picture', $this->picProfileName, PDO::PARAM_STR);
        $pictureProfile->execute();
        return $pictureProfile->fetch(PDO::FETCH_OBJ);
    }

    public function __destruct() {
        parent::__destruct();
    }

}

?>