<?php

class users extends dataBase {

    public $id = 0;
    public $userName = '';
    public $mail = '';
    public $password = '';
    public $passwordConfirm = '';
    public $role = '';
    public $rank = '';
    public $platform = '';
    public $battlenetAccount = '';

    public function __construct() {
        parent::__construct();
    }

    /**
     * Cette méthode permet d'ajouter un utilisateur 
     * @return type
     */
    public function addUsers() {
        $query = 'INSERT INTO `users`(`userName`, `mail`, `password`, `role`, `rank`, `platform`, `battlenetAccount`) VALUES(:userName, :mail, :password, :role, :rank, :platform, :battlenetAccount)';
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
        $query = 'SELECT `userName`, `mail`, `password`, `role`, `rank`, `platform`, `battlenetAccount` FROM `users`';
        $usersResult = $this->db->query($query);
        if (is_object($usersResult)) {
            $usersList = $usersResult->fetch(PDO::FETCH_OBJ);
        }
        return $usersList;
    }

    public function loginUserByMail() {
        $isCorrect = false;
        $userLogin = array();
        $query = 'SELECT `userName`, `mail`, `password`, `role`, `rank`, `platform`, `battlenetAccount` FROM `users` WHERE `mail` = :mail';
        $userInfo = $this->db->prepare($query);
        $userInfo->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        if (is_object($userInfo)) {
            if ($userInfo->execute()) {
                $userLogin = $userInfo->fetch(PDO::FETCH_OBJ);
            }
            if (is_object($userLogin)) {
                $this->userName = $userLogin->userName;
                $this->mail = $userLogin->mail;
                $this->password = $userLogin->password;
                $this->role = $userLogin->role;
                $this->rank = $userLogin->rank;
                $this->platform = $userLogin->platform;
                $this->battlenetAccount = $userLogin->battlenetAccount;
                $isCorrect = false;
            }
        }
        return $isCorrect;
    }

    public function __destruct() {
        parent::__destruct();
    }

}
