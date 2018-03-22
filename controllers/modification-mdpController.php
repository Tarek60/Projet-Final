<?php

$users = new users();
$formError = array();
$insertSuccess = false;

if (isset($_GET['userId'])) {
    $users->id = $_GET['userId'];
    $userInfo = $users->getUserInfoById();
}

if (isset($_POST['submit'])) {
    if (password_verify($_POST['oldPassword'], $userInfo->password)) {
        if ($_POST['newPassword'] != $_POST['confirmNewPassword']) {
            $formError['newpassword'] = 'Les mots de passes ne correspondent pas';
        } else {
            if (!empty($_POST['newPassword'])) {
                $users->password = password_hash($_POST['newPassword'], PASSWORD_BCRYPT);
            } else {
                $formError['newPassword'] = 'Veuillez remplir tous les champs';
            }
        }
    } else {
        $formError['oldPassword'] = 'Votre mot de passe actuel est incorrect';
    }

    if (count($formError) == 0) {
        $users->updatePassword();
        $insertSuccess = true;
    }
}