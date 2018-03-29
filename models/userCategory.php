<?php

class userCategory extends dataBase {
    
// Déclaration des attributs de la table owprjt_userCategory
    public $id = 0;
    public $name = '';
    
    public function __construct() {
        parent::__construct();
        $this->connectDB();
    }
    
    public function getUserCategoryList() {
        $query = 'SELECT `id`, `userCategoryName` FROM `' . TABLEPREFIX . 'userCategory`';
        $userCategoryResult = $this->pdo->query($query);
        if (is_object($userCategoryResult)) {
            $userCategoryList = $userCategoryResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $userCategoryList;
    }
    
    
    
    public function __destruct() {
        parent::__destruct();
    }
}
