<?php

class owprjt_profilePicture extends dataBase {

    public $id = 0;
    public $name = '';

    public function addPicture() {
        $query = 'INSERT INTO `owprjt_profilePicture` (`name`) VALUES (:name)';
        $addPicture = $this->db->prepare($query);
        $addPicture->bindValue('name', $this->name, PDO::PARAM_STR);
        return $addPicture->execute();
    }
    
    public function listPicturesById() {
        $listPictures = array();
        $query = 'SELECT `id`, `name` FROM `owprjt_profilePicture`';
        $result = $this->db->query($query);
        if (is_object($result)) {
            $listPictures = $result->fetchAll(PDO::FETCH_OBJ);
        }
        return $listPictures;
    }
}
