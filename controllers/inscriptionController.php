<?php

//On instancie l'objet users
$users = new users();
$insertSuccess = false;
$formError = array();
// Déclarations des regex qui permettent de verifier les données d'un formulaire
$regUserName = '#^([a-zA-Z0-9-_]{3,30})$#';
$regMail = '#[A-Z-a-z-0-9-.éàèîÏôöùüûêëç]{2,}@[A-Z-a-z-0-9éèàêâùïüëç]{2,}[.][a-z]{2,6}$#';
$regPassword = '#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])#';
$regAccount = '/^([a-zA-Z0-9-_]{3,30})#[0-9]{4,5}$/';

// On instancie l'objet role, puis on appelle la méthode pour afficher la liste des rôles
$role = new role();
$roleList = $role->showRoleList();

// On instancie l'objet rank, puis on appelle la méthode pour afficher la liste des rangs compétitifs
$rank = new rank();
$rankList = $rank->showRankList();

// On instancie l'objet platform, puis on appelle la méthode pour afficher la liste des platforme de jeu
$platform = new platform();
$platformList = $platform->showPlatformList();

/* On vérifie que toutes les variables $_POST existent et ne sont pas vide
 * Puis on assigne la valeur des $_POST dans les attributs de l'objet users
 */

if (isset($_POST['submit'])) {
    if (!empty($_POST['userName'])) {
        $users->userName = htmlspecialchars($_POST['userName']);
        if (!preg_match($regUserName, $users->userName)) {
            $formError['userName'] = 'Le pseudo doit contenir minimum 3 caratères et ne doit pas contenir de caractères spéciaux';
        } else {
            $checkPseudoUnique = $users->checkPseudoUnique();
            // Si le nom d'utilisateur existe déja
            if ($checkPseudoUnique->nbPseudo > 0) {
                $formError['userName'] = 'Ce nom d\'utilisateur existe déja';
            }
        }
    } else {
        $formError['userName'] = 'Le champ "Nom d\'utilisateur" est vide';
    }

    if (!empty($_POST['mail'])) {
        $users->mail = htmlspecialchars($_POST['mail']);
        if (!preg_match($regMail, $users->mail)) {
            $formError['mail'] = 'L\'adresse mail est incorrect';
        }
    } else {
        $formError['mail'] = 'Le champ "Adresse email" est vide';
    }
    if (isset($_POST['password']) && isset($_POST['passwordConfirm'])) {
        //Si les mot de passes ne sont pas identiques 
        if ($_POST['password'] != ($_POST['passwordConfirm'])) {
            $formError['checkPassword'] = 'Les mot des passes ne correspondent pas';
        } else {
            if (!empty($_POST['password'])) {
                $users->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                if (!preg_match($regPassword, $users->password)) {
                    $formError['password'] = 'Le mot de passe est incorrect';
                }
            } else {
                $formError['password'] = 'Le champ "Mot de passe" est vide';
            }
        }
    }

    if (isset($_POST['role'])) {
        $users->id_owprjt_role = htmlspecialchars($_POST['role']);
    } else {
        $formError['role'] = 'Veuillez choisir un rôle';
    }
    if (isset($_POST['rank'])) {
        $users->id_owprjt_rank = htmlspecialchars($_POST['rank']);
    } else {
        $formError['rank'] = 'Veuillez choisir un rang';
    }
    if (isset($_POST['platform'])) {
        $users->id_owprjt_platform = htmlspecialchars($_POST['platform']);
    } else {
        $formError['platform'] = 'Veuillez choisir une platforme de jeu';
    }
    if (!empty($_POST['account'])) {
        $users->account = htmlspecialchars($_POST['account']);
        if (!preg_match($regAccount, $users->account)) {
            $formError['account'] = 'Votre nom de compte est incorrect';
        }
    } else {
        $formError['account'] = 'Le champs "Compte battle.net" est vide';
    }

//Si il n'y a aucune erreur lors de l'envoi du formulaire, on appelle la méthode pour enregistrer les infos de l'utilisateur dans la base de données
    if (count($formError) == 0) {
        if (!$users->addUsers()) {
            $formError['add'] = 'Erreur lors de l\'ajout';
        } else {
            $insertSuccess = true;
            $users->addUsers();
            $users->userName = '';
            $users->mail = '';
            $_POST['password'] = '';
            $_POST['passwordConfirm'] = '';
            $users->account = '';
        }
    }
}
