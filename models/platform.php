<?php

class platform extends dataBase {

    // Déclaration des attributs de la table owprjt_topicsCategory
    public $id = 0;
    public $platform = '';

    public function __construct() {
        parent::__construct();
    }

    public function showPlatformList() {
        $platformList = array();
        $query = 'SELECT `id`, `platform` FROM `' . TABLEPREFIX . 'platform`';
        $showPlatformList = $this->db->query($query);
        if (is_object($showPlatformList)) {
            $platformList = $showPlatformList->fetchAll(PDO::FETCH_OBJ);
        }
        return $platformList;
    }

    public function __destruct() {
        parent::__destruct();
    }

}
