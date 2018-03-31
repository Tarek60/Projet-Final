<?php

$users = new users();
$usersList = $users->getUsersList();

$userCategory = new userCategory();
$userCategoryList = $userCategory->getUserCategoryList();

$formError = array();
$insertSuccess = false;

if (isset($_POST['submit'])) {
    if (isset($_POST['userCategory'])) {
        $users->id_owprjt_userCategory = htmlspecialchars($_POST['userCategory']);
    } else {
        $formError['userCategory'] = 'Erreur';
    }

    if (count($formError) == 0) {
        $insertSuccess = true;
        $users->updateUserCategory();
    }
}

if (isset($_GET['deleteUser'])) {
    $users->id = $_GET['deleteUser'];
    $usersList = $users->getUsersList();
}