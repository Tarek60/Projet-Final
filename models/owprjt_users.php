<?php

class owprjt_users extends dataBase {

// Déclaration des attributs de la table owprjt_users
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
     * @return boolean
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

   /* public function getUsersList() {
        $usersList = array();
        $query = 'SELECT `userName`, `mail`, `password`, `role`, `rank`, `platform`, `battlenetAccount` FROM `owprjt_users`';
        $usersResult = $this->db->query($query);
        if (is_object($usersResult)) {
            $usersList = $usersResult->fetch(PDO::FETCH_OBJ);
        }
        return $usersList;
    }
*/
    /**
     * Cette méthode permet de se connecter avec l'adresse email de l'utilisateur
     * @return array
     */
    public function loginUserByMail() {
        $userLogin = array();
        $query = 'SELECT `id`, `userName`, `mail`, `password`, `role`, `rank`, `platform`, `battlenetAccount`, `id_owprjt_profilePicture` FROM `owprjt_users` WHERE `mail` = :mail';
        $userInfo = $this->db->prepare($query);
        $userInfo->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        if (is_object($userInfo)) {
            if ($userInfo->execute()) {
                $userLogin = $userInfo->fetch(PDO::FETCH_OBJ);
            }
            return $userLogin;
        }
    }

    /**
     * Cette méthode permet d'afficher les infos de l'utilisateur sur la page profil
     * @return boolean
     */
    public function getUserInfoById() {
        $isCorrect = false;
        $query = 'SELECT `userName`, `mail`, `password`, `role`, `rank`, `platform`, `battlenetAccount`, `id_owprjt_profilePicture` FROM `owprjt_users` WHERE `id` = :id';
        $queryResult = $this->db->prepare($query);
        $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($queryResult->execute()) {
            $userInfo = $queryResult->fetch(PDO::FETCH_OBJ);
            if (is_object($userInfo)) {
                $this->userName = $userInfo->userName;
                $this->mail = $userInfo->mail;
                $this->password = $userInfo->password;
                $this->role = $userInfo->role;
                $this->rank = $userInfo->rank;
                $this->platform = $userInfo->platform;
                $this->battlenetAccount = $userInfo->battlenetAccount;
                $isCorrect = true;
            }
            return $isCorrect;
        }
    }

    /**
     * Cette méthode permet de modifier les info de l'utilisateur
     * @return bolean
     */
    public function updateUser() {
        $query = 'UPDATE `owprjt_users` SET `role` = :role, `rank` = :rank, `platform` = :platform, `battlenetAccount` = :battlenetAccount WHERE `id` = :id';
        $updateUser = $this->db->prepare($query);
        $updateUser->bindValue(':role', $this->role, PDO::PARAM_STR);
        $updateUser->bindValue(':rank', $this->rank, PDO::PARAM_STR);
        $updateUser->bindValue(':platform', $this->platform, PDO::PARAM_STR);
        $updateUser->bindValue(':battlenetAccount', $this->battlenetAccount, PDO::PARAM_STR);
        $updateUser->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updateUser->execute();
    }

    public function __destruct() {
        parent::__destruct();
    }

}
