<?php

class users extends dataBase {

// Déclaration des attributs de la table owprjt_users
    public $id = 0;
    public $userName = '';
    public $mail = '';
    public $password = '';
    public $id_owprjt_role = 0;
    public $id_owprjt_rank = 0;
    public $id_owprjt_platform = 0;
    public $account = '';
    public $id_owprjt_profilePicture = 0;
    public $picProfileName = '';

    public function __construct() {
        parent::__construct();
    }

    /**
     * Cette méthode permet d'ajouter un utilisateur 
     * @return boolean
     */
    public function addUsers() {
        $query = 'INSERT INTO `' . TABLEPREFIX . 'users`(`userName`, `mail`, `password`, `id_owprjt_role`, `id_owprjt_rank`, `id_owprjt_platform`, `account`) VALUES (:userName, :mail, :password, :role, :rank, :platform, :account)';
        $usersAdd = $this->db->prepare($query);
        $usersAdd->bindValue(':userName', $this->userName, PDO::PARAM_STR);
        $usersAdd->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $usersAdd->bindValue(':password', $this->password, PDO::PARAM_STR);
        $usersAdd->bindValue(':role', $this->id_owprjt_role, PDO::PARAM_INT);
        $usersAdd->bindValue(':rank', $this->id_owprjt_rank, PDO::PARAM_INT);
        $usersAdd->bindValue(':platform', $this->id_owprjt_platform, PDO::PARAM_INT);
        $usersAdd->bindValue(':account', $this->account, PDO::PARAM_STR);
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
        $query = 'SELECT `id`, `userName`, `mail`, `password`, `id_owprjt_role`, `id_owprjt_rank`, `id_owprjt_platform`, `account`, `id_' . TABLEPREFIX . 'profilePicture` FROM `' . TABLEPREFIX . 'users` WHERE `mail` = :mail';
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
        $userInfo = array();
        $query = 'SELECT `userName`, `mail`, `password`, `owprjt_role`.`role`, `owprjt_rank`.`rank`, `owprjt_platform`.`platform`, `account`, `picProfileName` FROM `owprjt_users`'
                . ' LEFT JOIN `owprjt_profilePicture` ON `owprjt_profilePicture`.`id` = `owprjt_users`.`id_owprjt_profilePicture`'
                . ' LEFT JOIN `owprjt_role` ON `owprjt_role`.`id` = `owprjt_users`.`id_owprjt_role`'
                . ' LEFT JOIN `owprjt_rank` ON `owprjt_rank`.`id` = `owprjt_users`.`id_owprjt_rank`'
                . ' LEFT JOIN `owprjt_platform` ON `owprjt_platform`.`id` = `owprjt_users`.`id_owprjt_platform`'
                . ' WHERE `owprjt_users`.`id` = :id';
        $queryResult = $this->db->prepare($query);
        $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($queryResult->execute()) {
            $userInfo = $queryResult->fetch(PDO::FETCH_OBJ);
        }
        return $userInfo;
    }

    /**
     * Cette méthode permet de modifier les info de l'utilisateur
     * @return bolean
     */
    public function updateUser() {
        $query = 'UPDATE `' . TABLEPREFIX . 'users` SET `id_owprjt_role` = :role, `id_owprjt_rank` = :rank, `id_owprjt_platform` = :platform, `account` = :account WHERE `id` = :id';
        $updateUser = $this->db->prepare($query);
        $updateUser->bindValue(':role', $this->id_owprjt_role, PDO::PARAM_STR);
        $updateUser->bindValue(':rank', $this->id_owprjt_rank, PDO::PARAM_STR);
        $updateUser->bindValue(':platform', $this->id_owprjt_platform, PDO::PARAM_STR);
        $updateUser->bindValue(':account', $this->account, PDO::PARAM_STR);
        $updateUser->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updateUser->execute();
    }
    
    public function updatePassword() {
        $query = 'UPDATE `' . TABLEPREFIX . 'users` SET `password` = :newPassword WHERE `id` = :id';
        $updatePassword = $this->db->prepare($query);
        $updatePassword->bindValue(':newPassword', $this->password, PDO::PARAM_STR);
        $updatePassword->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updatePassword->execute();
    }
    
    public function updateProfilePicture() {
        $query = 'UPDATE `' . TABLEPREFIX . 'users` SET `id_' . TABLEPREFIX . 'profilePicture` = :idPicture WHERE id = :id';
        $updatePictureProfile = $this->db->prepare($query);
        $updatePictureProfile->bindValue(':idPicture', $this->id_owprjt_profilePicture, PDO::PARAM_INT);
        $updatePictureProfile->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updatePictureProfile->execute();
    }

    public function __destruct() {
        parent::__destruct();
    }

}
