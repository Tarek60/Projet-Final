<?php

// On instancie l'objet articles
$articles = new articles();
$success = false;

/* On vérifie que la variable $_GET existe
 * Puis on assigne la valeur de $_GET dans l'attribut id de l'objet articles
 */
if (isset($_GET['deleteArticle'])) {
    $articles->id = $_GET['deleteArticle'];
    if ($articles->deleteArticle()){
        $success = true;
    }
}

$articlesList = $articles->getListArticles();
?>

