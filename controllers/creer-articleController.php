<?php

$articles = new owprjt_articles();
$titleArticle = !empty($_POST['title']);
$pictureArticle = isset($_FILES['picture']);
$contentArticle = !empty($_POST['content']);
$formError = array();
$insertSuccess = false;
$articles->id_owprjt_users = $_SESSION['id'];

if (isset($_POST['submit'])) {
    if ($titleArticle) {
        $articles->title = htmlspecialchars($_POST['title']);
        var_dump($articles->title);
    } else {
        $formError['title'] = 'Remplir le titre de l\'article';
    }

    if ($pictureArticle) {
        $articles->picture = $_FILES['picture']['name'];
        var_dump($articles->picture);
    } else {
        $formError['picture'] = 'Veuillez importer une image';
    }

    if ($contentArticle) {
        $articles->content = htmlspecialchars($_POST['content']);
        var_dump($articles->content);
    } else {
        $formError['content'] = 'Remplir le contenu de l\'article';
    }
    var_dump($formError);
    var_dump($_SESSION['id']);
    if (count($formError) == 0) {
        $insertSuccess = true;
        $articles->createArticle();
    }
}
?>

