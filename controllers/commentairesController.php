<?php

// On instancie l'objet comments
$comment = new comments();
$success = false;
$formError = array();

/* On vérifie que la variable $_GET existe
 * Puis on assigne la valeur de $_GET dans l'attribut id de l'objet articles
 */
if (isset($_GET['articleId'])) {
    $comment->id_owprjt_articles = $_GET['articleId'];
    $commentDetails = $comment->showComments();
    $numberComments = $comment->countNumberComments();
}

if (isset($_GET['deleteComment'])) {
    $comment->id = $_GET['deleteComment'];
    if ($comment->deleteComment()) {
        $commentDetails = $comment->showComments();
        $numberComments = $comment->countNumberComments();
    }
}

if (isset($_GET['updateComment'])) {
    $comment->id = $_GET['updateComment'];
    if (isset($_POST['submit'])) {
        $comment->id_owprjt_users = $_SESSION['id'];
        if (isset($_GET['articleId'])) {
            $comment->id_owprjt_articles = $_GET['articleId'];
        }
        if (!empty($_POST['formCommentUpdate'])) {
            $comment->content = htmlspecialchars($_POST['formCommentUpdate']);
        } else {
            $formError['comment'] = 'Veuillez rentrer un commentaire valide';
        }
//Si il n'y a aucune erreur lors de l'envoi du formulaire, on appelle la méthode pour enregistrer le commentaire dans la base de données
        if (count($formError) == 0) {
            $comment->updateComment();
            $commentDetails = $comment->showComments();
        }
    }
}
