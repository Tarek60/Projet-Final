<?php

$articles = new articles();
$titleArticle = !empty($_POST['title']);
$pictureArticle = isset($_FILES['picture']);
$resumeArticle = !empty($_POST['resume']);
$contentArticle = !empty($_POST['content']);
$formError = array();
$insertSuccess = false;
$articles->id_owprjt_users = $_SESSION['id'];

if (isset($_POST['submit'])) {
    
    if ($titleArticle) {
        $articles->title = $_POST['title'];
    } else {
        $formError['title'] = 'Remplir le titre de l\'article';
    }

    if ($pictureArticle) {
        $articles->picture = $_FILES['picture']['name'];
    } else {
        $formError['picture'] = 'Veuillez importer une image';
    }
    
    if ($resumeArticle) {
        $articles->resume = $_POST['resume'];
    } else {
        $formError['resume'] = 'Remplir le resumé de l\'article';
    }

    if ($contentArticle) {
        $articles->content = $_POST['content'];
    } else {
        $formError['content'] = 'Remplir le contenu de l\'article';
    }
    
    if (count($formError) == 0) {
        $insertSuccess = true;
        $articles->createArticle();
    }
}
?>

