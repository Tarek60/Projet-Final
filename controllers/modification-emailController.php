<?php

// On instancie l'objet users
$users = new users();
$formError = array();
$insertSuccess = false;

if (isset($_GET['userId'])) {
    $users->id = $_GET['userId'];
    $userInfo = $users->getUserInfoById();
}

if (isset($_POST['submit'])) {
    if (isset($_POST['oldMail'])) {
        if ($_POST['oldMail'] == $userInfo->mail) {
            if ($_POST['newMail'] != $_POST['confirmNewMail']) {
                $formError['newMail'] = 'Les adresses email ne correspondent pas';
            } else {
                if (!empty($_POST['newMail'])) {
                    $users->mail = htmlspecialchars($_POST['newMail']);
                } else {
                    $formError['newMail'] = 'Veuillez remplir tous les champs';
                }
            }
        } else {
            $formError['oldMail'] = 'Votre adresse email actuel est incorrect';
        }

        if (count($formError) == 0) {
            $users->updateMail();
            $insertSuccess = true;
        }
    } else {
        $formError['oldMail'] = 'Veuillez remplir votre adresse email actuelle';
    }
}