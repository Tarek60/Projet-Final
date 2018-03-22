<?php

$users = new users();
$formError = array();

// Si on clique sur le bouton
if (isset($_POST['submit'])) {
    //Si l'input de l'email est rempli
    if (!empty($_POST['mail'])) {
        $users->mail = $_POST['mail'];
        // On appelle la methode qui permet de se connecter avec l'adresse email
        $userLogin = $users->loginUserByMail();
        // Si le compte existe
        if ($userLogin != NULL) {
        // Si le mot de passe dans l'input correspond au mot de passe crypté dans la base de données
            if (password_verify($_POST['password'], $userLogin->password)) {
                // On démarre une session, et on stocke les info de l'utilisateur dans des variables de sessions
                session_start();
                $_SESSION['id'] = $userLogin->id;
                $_SESSION['userName'] = $userLogin->userName;
                $_SESSION['mail'] = $userLogin->mail;
                $_SESSION['id_owprjt_role'] = $userLogin->id_owprjt_role;
                $_SESSION['id_owprjt_rank'] = $userLogin->id_owprjt_rank;
                $_SESSION['id_owprjt_platform'] = $userLogin->id_owprjt_platform;
                $_SESSION['account'] = $userLogin->account;
                $_SESSION['id_owprjt_profilePicture'] = $userLogin->id_owprjt_profilePicture;
                // On redirige vers la page d'acutalité
                header('Location: actualite.php');
                exit;
            } else {
                $formError['password'] = 'L\'adresse email ou le mot de passe est incorrect';
            }
        } else {
            $formError['login'] = 'Votre compte n\'existe pas';
        }
    }
}

?> 