<?php

// On instancie l'objet articles
$articles = new articles();

/* On vérifie que la variable $_GET existe
 * Puis on assigne la valeur de $_GET dans l'attribut id de l'objet articles
 */
if (isset($_GET['articleId'])) {
    $articles->id = $_GET['articleId'];
    $articleInfo = $articles->getArticleById();
}
?>