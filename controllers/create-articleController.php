<?php
$articles = new azert_articles();
$titleArticle = !empty($_POST['title']);
$pictureArticle = isset($_FILES['picture']);
$contentArticle = !empty($_POST['content']);
$formError = array();
$insertSuccess = false;    

if(isset($_POST['submit'])) {
    if ($titleArticle) {
        $articles->title = htmlspecialchars($_POST['title']);
    } else {
        $formError['title'] = 'Remplir le titre de l\'article';
    }
    
    if ($pictureArticle) {
        $articles->picture = htmlspecialchars($_FILES['picture']);
    } else {
        $formError['picture'] = 'Veuillez importer une image';
    }
    
    if ($contentArticle) {
        $articles->content = htmlspecialchars($_POST['content']);
    } else {
        $formError['content'] = 'Remplir le contenu de l\'article';
    }
    
    if (count($formError) == 0) {
        $insertSuccess = true;
        $articles->createArticle();
    }
  /*  var_dump($titleArticle);
    var_dump($pictureArticle);
    var_dump($contentArticle);*/
}

?>

