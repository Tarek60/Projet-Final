<?php

//On instancie l'objet patients
$users = new users();
$insertSuccess = false;
$formError = array();
// Déclarations des regex qui permettent de verifier les données d'un formulaire
$regUserName = '#^([a-zA-Z0-9-_]{2,30})$#';
$regMail = '#[A-Z-a-z-0-9-.éàèîÏôöùüûêëç]{2,}@[A-Z-a-z-0-9éèàêâùïüëç]{2,}[.][a-z]{2,6}$#';
$regPassword = '#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])#';

// On instancie l'objet role, puis on appelle la méthode pour afficher la liste des rôles
$role = new role();
$roleList = $role->showRoleList();

// On instancie l'objet rank, puis on appelle la méthode pour afficher la liste des rangs compétitifs
$rank = new rank();
$rankList = $rank->showRankList();

// On instancie l'objet platform, puis on appelle la méthode pour afficher la liste des platforme de jeu
$platform = new platform();
$platformList = $platform->showPlatformList();

/* On vérifie que toutes les variables $_POST existent
 * Puis on assigne la valeur des $_POST dans les attributs de l'objet patients
 */
if (isset($_POST['submit'])) {
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
    if (isset($_POST['password']) && isset($_POST['passwordConfirm'])) {
        //Si les mot de passes ne sont pas identiques 
        if ($_POST['password'] != ($_POST['passwordConfirm'])) {
            $formError['passwords'] = 'Les mot des passes ne correspondent pas.';
        } else {
            if (!empty($_POST['password'])) {
                $users->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            } if (!preg_match($regPassword, $users->password)) {
                $formError['password'] = 'Le mot de passe est incorrect';
            }
        }
    }

    if (isset($_POST['role'])) {
        $users->id_owprjt_role = htmlspecialchars($_POST['role']);
    } else {
        $formError['role'] = 'Le role n\'est pas correct';
    }
    if (isset($_POST['rank'])) {
        $users->id_owprjt_rank = htmlspecialchars($_POST['rank']);
    } else {
        $formError['rank'] = 'Le rank est incorrect';
    }
    if (isset($_POST['platform'])) {
        $users->id_owprjt_platform = htmlspecialchars($_POST['platform']);
    } else {
        $formError['platform'] = 'La plateforme est incorrect';
    }
    if (!empty($_POST['account'])) {
        $users->account = htmlspecialchars($_POST['account']);
    } else {
        $formError['account'] = 'Le compte battle.net est incorrect';
    }

//Si il n'y a aucune erreur lors de l'envoi du formulaire, on appelle la méthode pour enregistrer les infos de l'utilisateur dans la base de données
    if (count($formError) == 0) {
        $insertSuccess = true;
        $users->addUsers();
    }
}
?>
