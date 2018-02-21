<?php

$users = new owprjt_users();
$formError = array();

// Si on clique sur le bouton
if (isset($_POST['submit'])) {
    //Si l'input de l'email est rempli
    if (!empty($_POST['mail'])) {
        $users->mail = $_POST['mail'];
        // On appelle la methode qui permet de se connecter avec l'adresse email
        $userLogin = $users->loginUserByMail();
        // Si le mot de passe correspond au mot de passe crypté dans la base de données
        if (password_verify($_POST['password'], $userLogin->password)) {
            // On démarre une session, et on stocke les info de l'utilisateur dans des variables de sessions
            session_start();
            $_SESSION['userName'] = $userLogin->userName;
            $_SESSION['mail'] = $userLogin->mail;
            $_SESSION['role'] = $userLogin->role;
            $_SESSION['rank'] = $userLogin->rank;
            $_SESSION['platform'] = $userLogin->platform;
            $_SESSION['battlenetAccount'] = $userLogin->battlenetAccount;
            // On redirige vers la page profil, où les info sont afficher
            header('Location: actualite.php');
            exit;
        } else {
            $formError['password'] = 'L\'adresse email ou le mot de passe est incorrect';
        }
    }
}
?> 