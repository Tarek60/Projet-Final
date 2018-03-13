<?php

$comment = new comments();

$formError = array();
$insertSuccess = false;

if (isset($_POST['submit'])) {
    $comment->id_owprjt_users = $_SESSION['id'];
    if (isset($_GET['articleId'])) {
        $comment->id_owprjt_articles = $_GET['articleId'];
    }
    if (!empty($_POST['comment'])) {
        $comment->content = htmlspecialchars($_POST['comment']);
    } else {
        $formError['comment'] = 'Veuillez rentrer un commentaire valide';
    }  
    if (count($formError) == 0) {
        $comment->addComment();
    }
}

