<?php

// La partie AJAX où j'ai rien compris 
if (isset($_POST['picture'])) {
    session_start();
    include_once '../configuration.php';
    $picture = new profilePicture();
    $users = new users();
    $picture->picProfileName = $_POST['picture'];
    $pictureProfil = $picture->getPictureById();
    $users->id = $_SESSION['id'];
    $users->id_owprjt_profilePicture = $pictureProfil->id;
    $users->updateProfilePicture();
}

$users = new users();
$formError = array();

if (isset($_GET['userId'])) {
    $users->id = $_GET['userId'];
    $userInfo = $users->getUserInfoById();
}

$role = new role();
$roleList = $role->showRoleList();

$rank = new rank();
$rankList = $rank->showRankList();

$platform = new platform();
$platformList = $platform->showPlatformList();

if (isset($_POST['submit'])) {

    if (isset($_POST['role'])) {
        $users->id_owprjt_role = htmlspecialchars($_POST['role']);
    } else {
        $formError['role'] = 'Le role n\'est pas correct';
    }
    // Si un role est selectionner
    if (isset($_POST['rank'])) {
        $users->id_owprjt_rank = htmlspecialchars($_POST['rank']);
    } else {
        $formError['rank'] = 'Le rank est incorrect';
    }
    // Si une platforme est selectionner
    if (isset($_POST['platform'])) {
        $users->id_owprjt_platform = htmlspecialchars($_POST['platform']);
    } else {
        $formError['platform'] = 'La plateforme est incorrect';
    }
    // Si le compte battlenet est rempli
    if (!empty($_POST['account'])) {
        $users->account = htmlspecialchars($_POST['account']);
    } else {
        $formError['account'] = 'Le compte est incorrect';
    }

    if (count($formError) == 0) {
        $users->updateUser();
        header('Location: mon-profil.php?userId=' . $_SESSION['id']);
    }
}
?>
