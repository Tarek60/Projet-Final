<?php

// On instancie l'objet users
$users = new users();
$formError = array();

/* On vérifie que toutes les variables $_POST existent
 * On assigne la valeur des $_POST dans les attributs de l'objet patients
 * On appelle la methode qui permet de se connecter avec l'adresse email
 * On verifie que le compte existe
 * Si le mot de passe dans l'input correspond au mot de passe crypté dans la base de données
 * On démarre une session, et on stocke les info de l'utilisateur dans des variables de sessions
 */
if (isset($_POST['submit'])) {
    if (!empty($_POST['mail'])) {
        $users->mail = $_POST['mail'];
        $userLogin = $users->loginUserByMail();
        if ($userLogin != NULL) {
            if (password_verify($_POST['password'], $userLogin->password)) {
                session_start();
                $_SESSION['id'] = $userLogin->id;
                $_SESSION['userName'] = $userLogin->userName;
                $_SESSION['mail'] = $userLogin->mail;
                $_SESSION['id_owprjt_role'] = $userLogin->id_owprjt_role;
                $_SESSION['id_owprjt_rank'] = $userLogin->id_owprjt_rank;
                $_SESSION['id_owprjt_platform'] = $userLogin->id_owprjt_platform;
                $_SESSION['account'] = $userLogin->account;
                $_SESSION['id_owprjt_profilePicture'] = $userLogin->id_owprjt_profilePicture;
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