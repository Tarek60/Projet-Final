<?php

$comment = new comments();
if (isset($_GET['articleId'])) {
    $comment->id_owprjt_articles = $_GET['articleId'];
    $commentDetails = $comment->showComments();
    $numberComments = $comment->countNumberComments();
}