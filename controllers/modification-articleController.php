<?php

// On instancie l'objet articles
$articles = new articles();
$formError = array();
$insertSuccess = false;
$articles->id_owprjt_users = $_SESSION['id'];

/* On vérifie que toutes les variables $_POST existent
 * Puis on assigne la valeur des $_POST dans les attributs de l'objet patients
 */
if (isset($_POST['submit'])) {
    if (isset($_GET['articleId'])) {
        $articles->id = $_GET['articleId'];
    }

    if (!empty($_POST['title'])) {
        $articles->title = $_POST['title'];
    } else {
        $formError['title'] = 'Remplir le titre de l\'article';
    }

    if (isset($_FILES['picture'])) {
        $articles->picture = $_FILES['picture']['name'];
    } else {
        $formError['picture'] = 'Veuillez importer une image';
    }

    if (!empty($_POST['resume'])) {
        $articles->resume = $_POST['resume'];
    } else {
        $formError['resume'] = 'Remplir le resumé de l\'article';
    }

    if (!empty($_POST['content'])) {
        $articles->content = $_POST['content'];
    } else {
        $formError['content'] = 'Remplir le contenu de l\'article';
    }

    /* Si il n'y a aucune erreur lors de l'envoi du formulaire, on assigne la valeur de $_SESSION dans l'attribut id_owprjt_users de l'objet articles
     * Puis on appelle la méthode updateArticle()
     */
    if (count($formError) == 0) {
        $insertSuccess = true;
        $articles->updateArticle();
        header('Location: actualite.php');
    }
}
?>
