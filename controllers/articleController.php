<?php

$articles = new owprjt_articles();
if (isset($_GET['articleId'])) {
    $articles->id = $_GET['articleId'];
    $articleInfo = $articles->getArticleById();
}
?>