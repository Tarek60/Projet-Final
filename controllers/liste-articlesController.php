<?php

$articles = new articles();
$success = false;
if (isset($_GET['deleteArticle'])) {
    $articles->id = $_GET['deleteArticle'];
    if ($articles->deleteArticle()){
        $success = true;
    }
}

$articlesList = $articles->getListArticles();
?>

