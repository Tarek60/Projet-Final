<?php

$users = new users();
$usersList = $users->getUsersList();

$userCategory = new userCategory();
$userCategoryList = $userCategory->getUserCategoryList();

$formError = array();
$insertSuccess = false;

if (isset($_GET['userId'])) {
    $users->id = $_GET['userId'];
}

if (isset($_POST['submit'])) {
    if (isset($_POST['userCategory'])) {
        $users->id_owprjt_userCategory = $_POST['userCategory'];
    } else {
        $formError['userCategory'] = 'Erreur';
    }

    if (count($formError) == 0) {
        $users->updateUserCategory();
        $usersList = $users->getUsersList();
    }
}

if (isset($_GET['deleteUser'])) {
    $users->id = $_GET['deleteUser'];
    if ($users->deleteUser()) {
        $usersList = $users->getUsersList();
    }
}