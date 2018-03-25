<?php

class role extends dataBase {

    // Déclaration des attributs de la table owprjt_topicsCategory
    public $id = 0;
    public $role = '';

    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Cete méthode permet d'afficher la liste des rôle
     * @return array
     */
    public function showRoleList() {
        $roleList = array();
        $query = 'SELECT `id`, `role` FROM `' . TABLEPREFIX . 'role`';
        $showRoleList = $this->db->query($query);
        if (is_object($showRoleList)) {
            $roleList = $showRoleList->fetchAll(PDO::FETCH_OBJ);
        }
        return $roleList;
    }

    public function __destruct() {
        parent::__destruct();
    }

}
