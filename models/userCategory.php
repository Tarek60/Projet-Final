<?php

class userCategory extends dataBase {
    
// Déclaration des attributs de la table owprjt_userCategory
    public $id = 0;
    public $name = '';
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Cette méthode permet d'afficher la liste des catégorie d'utilisateur
     * @return type
     */
    public function getUserCategoryList() {
        $query = 'SELECT `id`, `userCategoryName` FROM `' . TABLEPREFIX . 'userCategory`';
        $userCategoryResult = $this->db->query($query);
        if (is_object($userCategoryResult)) {
            $userCategoryList = $userCategoryResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $userCategoryList;
    }
    
    
    
    public function __destruct() {
        parent::__destruct();
    }
}
