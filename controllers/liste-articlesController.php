<?php

$success = false;
if (isset($_GET['deleteArticle'])) {
    $deleteArticle = new owprjt_articles();
    $deleteArticle->id = $_GET['deleteArticle'];
    if ($deleteArticle->deleteArticleById()){
        $success = true;
    }
}

$articles = new owprjt_articles();
$articlesList = $articles->getListArticles();
?>

