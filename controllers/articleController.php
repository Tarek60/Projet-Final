<?php

$articles = new articles();
if (isset($_GET['articleId'])) {
    $articles->id = $_GET['articleId'];
    $articleInfo = $articles->getArticleById();
}
?>