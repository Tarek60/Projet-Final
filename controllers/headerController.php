<?php 
include_once 'configuration.php';
include_once 'controllers/profilController.php';

$users = new users();
if (isset($_SESSION['id'])) {
    $users->id = $_SESSION['id'];
    $userInfo = $users->getUserInfoById();
}
