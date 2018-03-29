<?php

class rank extends dataBase {

    // Déclaration des attributs de la table owprjt_topicsCategory
    public $id = 0;
    public $rank = '';

    public function __construct() {
        parent::__construct();
        $this->connectDB();
    }
    
    /**
     * Cette méthode permet d'afficher la liste des rang compétitif
     * @return array
     */
    public function showRankList() {
        $roleList = array();
        $query = 'SELECT `id`, `rank` FROM `' . TABLEPREFIX . 'rank`';
        $showRankList = $this->pdo->query($query);
        if (is_object($showRankList)) {
            $rankList = $showRankList->fetchAll(PDO::FETCH_OBJ);
        }
        return $rankList;
    }

    public function __destruct() {
        parent::__destruct();
    }

}
