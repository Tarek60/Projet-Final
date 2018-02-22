<?php

class owprjt_users extends dataBase {

    public $id = 0;
    public $userName = '';
    public $mail = '';
    public $password = '';
    public $passwordConfirm = '';
    public $role = '';
    public $rank = '';
    public $platform = '';
    public $battlenetAccount = '';
    public $id_owprjt_profilePicture = 0;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Cette méthode permet d'ajouter un utilisateur 
     * @return type
     */
    public function addUsers() {
        $query = 'INSERT INTO `owprjt_users`(`userName`, `mail`, `password`, `role`, `rank`, `platform`, `battlenetAccount`) VALUES(:userName, :mail, :password, :role, :rank, :platform, :battlenetAccount)';
        $usersAdd = $this->db->prepare($query);
        $usersAdd->bindValue(':userName', $this->userName, PDO::PARAM_STR);
        $usersAdd->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $usersAdd->bindValue(':password', $this->password, PDO::PARAM_STR);
        $usersAdd->bindValue(':role', $this->role, PDO::PARAM_STR);
        $usersAdd->bindValue(':rank', $this->rank, PDO::PARAM_STR);
        $usersAdd->bindValue(':platform', $this->platform, PDO::PARAM_STR);
        $usersAdd->bindValue(':battlenetAccount', $this->battlenetAccount, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $usersAdd->execute();
    }

    public function getUsersList() {
        $usersList = array();
        $query = 'SELECT `userName`, `mail`, `password`, `role`, `rank`, `platform`, `battlenetAccount` FROM `owprjt_users`';
        $usersResult = $this->db->query($query);
        if (is_object($usersResult)) {
            $usersList = $usersResult->fetch(PDO::FETCH_OBJ);
        }
        return $usersList;
    }

    public function loginUserByMail() {
        $userLogin = array();
        $query = 'SELECT `id`, `userName`, `mail`, `password`, `role`, `rank`, `platform`, `battlenetAccount` FROM `owprjt_users` WHERE `mail` = :mail';
        $userInfo = $this->db->prepare($query);
        $userInfo->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        if (is_object($userInfo)) {
            if ($userInfo->execute()) {
                $userLogin = $userInfo->fetch(PDO::FETCH_OBJ);
            }
            return $userLogin;
        }
    }

    public function __destruct() {
        parent::__destruct();
    }

}
