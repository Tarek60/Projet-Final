<?php

// On instancie l'objet comments
$comment = new comments();
$success = false;

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
        $success = true;
        $commentDetails = $comment->showComments();
        $numberComments = $comment->countNumberComments();
    }
}