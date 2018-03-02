<?php

$articles = new owprjt_articles();
$success = false;
if (isset($_GET['deleteArticle'])) {
    $articles->id = $_GET['deleteArticle'];
    if ($articles->deleteArticleById()){
        $success = true;
    }
}

$articlesList = $articles->getListArticles();
?>

