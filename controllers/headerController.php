<?php 
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/profilePicture.php';
include_once 'controllers/profilController.php';

$users = new users();
if (isset($_SESSION['id'])) {
    $users->id = $_SESSION['id'];
    $userInfo = $users->getUserInfoById();
}
