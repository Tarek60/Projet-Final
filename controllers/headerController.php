<?php 
include_once 'models/dataBase.php';
include_once 'models/owprjt_users.php';
include_once 'models/owprjt_profilePicture.php';
include_once 'controllers/profilController.php';

$users = new owprjt_users();
if (isset($_SESSION['id'])) {
    $users->id = $_SESSION['id'];
    $users->getUserInfoById();
}
