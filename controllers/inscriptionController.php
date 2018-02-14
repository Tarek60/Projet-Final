<?php

$users = new users();
$insertSuccess = false;
$formError = array();
$regUserName = '#^([a-zA-Z0-9-_]{2,30})$#';
$regMail = '#[A-Z-a-z-0-9-.éàèîÏôöùüûêëç]{2,}@[A-Z-a-z-0-9éèàêâùïüëç]{2,}[.][a-z]{2,6}$#';
$regPassword = '#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])#';
$regBattlenet = '';

if (isset($_POST['submit'])) {
// On verifie si les input du formulaires ne sont pas vides
    if (!empty($_POST['userName'])) {
        $users->userName = htmlspecialchars($_POST['userName']);
    } if (!preg_match($regUserName, $users->userName)) {
        $formError['userName'] = 'Le pseudo est incorrect';
    }
    
    if (!empty($_POST['mail'])) {
        $users->mail = htmlspecialchars($_POST['mail']);
    } if (!preg_match($regMail, $users->mail)) {
        $formError['mail'] = 'L\'adresse mail est incorrect';
    }

//Si les mot de passes ne sont pas identiques 
    if (isset($_POST['password']) && isset($_POST['passwordConfirm'])) {
        if ($_POST['password'] != ($_POST['passwordConfirm'])) {
            $formError['passwords'] = 'Les mot des passes ne correspondent pas.';
        } else {
            if (!empty($_POST['password'])) {
                $users->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            } if (!preg_match($regPassword, $users->password)) {
                $formError['password'] = 'Le mot de passe est incorrect';
            }

            if (!empty($_POST['passwordConfirm'])) {
                $users->passwordConfirm = htmlspecialchars($_POST['passwordConfirm']);
            }
        }
    }


    if (isset($_POST['role'])) {
        $users->role = htmlspecialchars($_POST['role']);
    } else {
        $formError['role'] = 'Le role n\'est pas correct';
    }

    if (isset($_POST['rank'])) {
        $users->rank = htmlspecialchars($_POST['rank']);
    } else {
        $formError['rank'] = 'Le rank est incorrect';
    }

    if (isset($_POST['platform'])) {
        $users->platform = htmlspecialchars($_POST['platform']);
    } else {
        $formError['platform'] = 'La plateforme est incorrect';
    }

    if (!empty($_POST['battlenetAccount'])) {
        $users->battlenetAccount = htmlspecialchars($_POST['battlenetAccount']);
    } else {
        $formError['battlenetAccount'] = 'Le compte battle.net est incorrect';
    }

//On vérifie qu'il n'y a pas eu d'erreur
    if (count($formError) == 0) {
        $insertSuccess = true;
        $users->addUsers();
    }
}
?>
