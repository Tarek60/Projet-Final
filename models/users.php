<?php

class users extends dataBase {

// Déclaration des attributs de la table owprjt_users
    public $id = 0;
    public $userName = '';
    public $mail = '';
    public $password = '';
    public $account = '';
    public $id_owprjt_role = 0;
    public $id_owprjt_rank = 0;
    public $id_owprjt_platform = 0;
    public $id_owprjt_profilePicture = 0;
    public $id_owprjt_userCategory = 0;

    public function __construct() {
        parent::__construct();
        $this->connectDB();
    }

    /**
     * Cette méthode permet d'ajouter un utilisateur 
     * @return bool
     */
    public function addUsers() {
        $query = 'INSERT INTO `' . TABLEPREFIX . 'users`(`userName`, `mail`, `password`, `id_owprjt_role`, `id_owprjt_rank`, `id_owprjt_platform`, `account`) VALUES (:userName, :mail, :password, :role, :rank, :platform, :account)';
        $usersAdd = $this->pdo->prepare($query);
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
    
    /**
     * Cette méthode permet d'afficher la liste de tout les membres inscrit sur le site
     * @return type
     */
    public function getUsersList() {
        $usersList = array();
        $query = 'SELECT `owprjt_users`.`id`, `userName`, `mail`, `id_owprjt_userCategory`, `owprjt_userCategory`.`userCategoryName`'
                . ' FROM `owprjt_users`'
                . ' LEFT JOIN `owprjt_userCategory` ON `owprjt_userCategory`.`id` = `owprjt_users`.`id_owprjt_userCategory`';
        $usersResult = $this->pdo->query($query);
        if (is_object($usersResult)) {
            $usersList = $usersResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $usersList;
    }

    /**
     * Cette méthode permet de se connecter avec l'adresse email de l'utilisateur
     * @return array
     */
    public function loginUserByMail() {
        $userLogin = array();
        $query = 'SELECT `id`, `userName`, `mail`, `password`, `id_owprjt_role`, `id_owprjt_rank`, `id_owprjt_platform`, `account`, `id_' . TABLEPREFIX . 'profilePicture`, `id_' . TABLEPREFIX . 'userCategory` FROM `' . TABLEPREFIX . 'users` WHERE `mail` = :mail';
        $userInfo = $this->pdo->prepare($query);
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
     * @return bool
     */
    public function getUserInfoById() {
        $userInfo = array();
        $query = 'SELECT `userName`, `mail`, `password`, `' . TABLEPREFIX . 'role`.`role`, `' . TABLEPREFIX . 'rank`.`rank`, `' . TABLEPREFIX . 'platform`.`platform`,'
                . ' `account`, `picProfileName`, `' . TABLEPREFIX . 'userCategory`.`userCategoryName`'
                . ' FROM `owprjt_users`'
                . ' LEFT JOIN `' . TABLEPREFIX . 'profilePicture` ON `' . TABLEPREFIX . 'profilePicture`.`id` = `' . TABLEPREFIX . 'users`.`id_' . TABLEPREFIX . 'profilePicture`'
                . ' LEFT JOIN `' . TABLEPREFIX . 'role` ON `' . TABLEPREFIX . 'role`.`id` = `' . TABLEPREFIX . 'users`.`id_' . TABLEPREFIX . 'role`'
                . ' LEFT JOIN `' . TABLEPREFIX . 'rank` ON `' . TABLEPREFIX . 'rank`.`id` = `' . TABLEPREFIX . 'users`.`id_' . TABLEPREFIX . 'rank`'
                . ' LEFT JOIN `' . TABLEPREFIX . 'platform` ON `' . TABLEPREFIX . 'platform`.`id` = `' . TABLEPREFIX . 'users`.`id_' . TABLEPREFIX . 'platform`'
                . ' LEFT JOIN `' . TABLEPREFIX . 'userCategory` ON `' . TABLEPREFIX . 'userCategory`.`id` = `' . TABLEPREFIX . 'users`.`id_' . TABLEPREFIX . 'userCategory`'
                . ' WHERE `' . TABLEPREFIX . 'users`.`id` = :id';
        $queryResult = $this->pdo->prepare($query);
        $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($queryResult->execute()) {
            $userInfo = $queryResult->fetch(PDO::FETCH_OBJ);
        }
        return $userInfo;
    }

    /**
     * Cette méthode permet de modifier les info de l'utilisateur
     * @return bool
     */
    public function updateUser() {
        $query = 'UPDATE `' . TABLEPREFIX . 'users` SET `id_' . TABLEPREFIX . 'role` = :role, `id_' . TABLEPREFIX . 'rank` = :rank, `id_' . TABLEPREFIX . 'platform` = :platform, `account` = :account WHERE `id` = :id';
        $updateUser = $this->pdo->prepare($query);
        $updateUser->bindValue(':role', $this->id_owprjt_role, PDO::PARAM_STR);
        $updateUser->bindValue(':rank', $this->id_owprjt_rank, PDO::PARAM_STR);
        $updateUser->bindValue(':platform', $this->id_owprjt_platform, PDO::PARAM_STR);
        $updateUser->bindValue(':account', $this->account, PDO::PARAM_STR);
        $updateUser->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updateUser->execute();
    }
    
    /**
     * Cette méthode permet de changer l'adresse email
     * @return bool
     */
     public function updateMail() {
        $query = 'UPDATE `' . TABLEPREFIX . 'users` SET `mail` = :mail WHERE `id` = :id';
        $updateMail= $this->pdo->prepare($query);
        $updateMail->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $updateMail->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updateMail->execute();
    }
    
    /**
     * Cette méthode permet de changer le mot de passe
     * @return bool
     */
    public function updatePassword() {
        $query = 'UPDATE `' . TABLEPREFIX . 'users` SET `password` = :newPassword WHERE `id` = :id';
        $updatePassword = $this->pdo->prepare($query);
        $updatePassword->bindValue(':newPassword', $this->password, PDO::PARAM_STR);
        $updatePassword->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updatePassword->execute();
    }

    /**
     * Cette méthode permet de changer l'image de profil
     * @return bool
     */
    public function updateProfilePicture() {
        $query = 'UPDATE `' . TABLEPREFIX . 'users` SET `id_' . TABLEPREFIX . 'profilePicture` = :idPicture WHERE id = :id';
        $updatePictureProfile = $this->pdo->prepare($query);
        $updatePictureProfile->bindValue(':idPicture', $this->id_owprjt_profilePicture, PDO::PARAM_INT);
        $updatePictureProfile->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updatePictureProfile->execute();
    }

    /**
     * Cette méthode permet de changer la catégorie de l'utilisateur
     * @return type
     */
    public function updateUserCategory() {
        $query = 'UPDATE `' . TABLEPREFIX . 'users` SET `id_' . TABLEPREFIX . 'userCategory` = :userCategory WHERE id = :id';
        $updateUserCategory = $this->pdo->prepare($query);
        $updateUserCategory->bindValue(':userCategory', $this->id_owprjt_userCategory, PDO::PARAM_INT);
        $updateUserCategory->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updateUserCategory->execute();
    }
    
    /**
     * Cette méthode permet de supprimer un utilisateur
     * @return type
     */
    public function deleteUser() {
        $query = 'DELETE FROM `' . TABLEPREFIX . 'users` WHERE `id` = :id';
        $deleteUser = $this->pdo->prepare($query);
        $deleteUser->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $deleteUser->execute();
    }
    
    public function __destruct() {
        parent::__destruct();
    }

}
