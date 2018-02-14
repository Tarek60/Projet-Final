<?php

$users = new users();
$formError = array();
$insertSuccess = false;

if (isset($_POST['submit'])) {
    if (!empty($_POST['mail'])) {
        $users->mail = $_POST['mail'];
        $userLogin = $users->loginUserByMail();
        if (password_verify($_POST['password'], $users->password)) {
            $insertSuccess = true;
            session_start();
            $_SESSION['userName'] = $users->userName;
            $_SESSION['mail'] = $users->mail;
            $_SESSION['role'] = $users->role;
            $_SESSION['rank'] = $users->rank;
            $_SESSION['platform'] = $users->platform;
            $_SESSION['battlenetAccount'] = $users->battlenetAccount;
        } else {
            $formError['password'] = 'L\'adresse email ou le mot de passe est incorrect';
        }
    }
}
?> 