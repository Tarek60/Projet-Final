<?php

// On instancie l'objet comments
$comment = new comments();
$formError = array();

/* On vérifie que toutes les variables $_POST existent
 * Puis on assigne la valeur des $_POST dans les attributs de l'objet comments
 */
if (isset($_POST['submit'])) {
    if (isset($_GET['articleId'])) {
        $comment->id_owprjt_articles = $_GET['articleId'];
    }
    if (!empty($_POST['comment'])) {
        $comment->content = htmlspecialchars($_POST['comment']);
    } else {
        $formError['comment'] = 'Veuillez rentrer un commentaire valide';
    }
/*
 * Si il n'y a aucune erreur lors de l'envoi du formulaire
 * On assigne la valeur de $_SESSION['id] à l'attribut id_owprjt_users de l'objet comment
 * On appelle la méthode pour enregistrer le commentaire dans la base de données
 */
    if (count($formError) == 0) {
        $comment->id_owprjt_users = $_SESSION['id'];
        $comment->addComment();
    }
}

