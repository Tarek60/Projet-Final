<?php

$users = new owprjt_users();
$formError = array();
if (isset($_GET['userId'])) {
    $users->id = $_GET['userId'];
    $users->getUserInfoById();
}

if (isset($_POST['submit'])) {
    
    if (isset($_POST['role'])) {
        $users->role = htmlspecialchars($_POST['role']);
    } else {
        $formError['role'] = 'Le role n\'est pas correct';
    }
    // Si un role est selectionner
    if (isset($_POST['rank'])) {
        $users->rank = htmlspecialchars($_POST['rank']);
    } else {
        $formError['rank'] = 'Le rank est incorrect';
    }
    // Si une platforme est selectionner
    if (isset($_POST['platform'])) {
        $users->platform = htmlspecialchars($_POST['platform']);
    } else {
        $formError['platform'] = 'La plateforme est incorrect';
    }
    // Si le compte battlenet est rempli
    if (!empty($_POST['battlenetAccount'])) {
        $users->battlenetAccount = htmlspecialchars($_POST['battlenetAccount']);
    } else {
        $formError['battlenetAccount'] = 'Le compte battle.net est incorrect';
    }

    if (count($formError) == 0) {
        $users->updateUser();
        header('Location: profil.php?userId=' . $_SESSION['id']);
    }
}
?>