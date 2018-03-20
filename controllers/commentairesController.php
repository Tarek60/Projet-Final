<?php

$comment = new comments();
$success = false;

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