<?php

/*
 * On instancie l'objet articles
 * On appelle la methode qui permet d'afficher la liste des articles
 */
$articles = new articles();
$articlesList = $articles->getListArticles();

/* On vérifie que la variable $_GET existe
 * On assigne l'id de l'article au parametre d'url $_GET[deleteArticle]
 * On appelle la methode qui permet de supprimer l'article
 * On rappelle la méthode pour afficher la liste des articles
 */
if (isset($_GET['deleteArticle'])) {
    $articles->id = $_GET['deleteArticle'];
    $articles->deleteArticle();
    $articlesList = $articles->getListArticles();
}

