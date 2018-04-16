<?php

// On instancie l'objet articles
$articles = new articles();
$formError = array();
$insertSuccess = false;

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
        if ($_FILES['picture']['name'] != '') {
        // Si le champs est différent de vide, on assigne la valeur du champs dans l'attribut picture de l'objet articles
            $articles->picture = $_FILES['picture']['name'];
        } else {
            $articles->picture = $articleInfo->picture;
        }
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

    /* Si il n'y a aucune erreur lors de l'envoi du formulaire
     * Si l'upload de l'image de l'article à bien été effectué
     * On assigne la valeur de $_SESSION dans l'attribut id_owprjt_users de l'objet articles
     * Puis on appelle la méthode permettant de modifier l'article
     */
    if (count($formError) == 0) {
        if (move_uploaded_file($_FILES['picture']['tmp_name'], 'assets/img/article/' . $articles->picture)) {
            $articles->id_owprjt_users = $_SESSION['id'];
            $insertSuccess = true;
            $articles->updateArticle();
            header('Location: actualite.php');
        } else {
            $formError['picture'] = 'Erreur d\'upload de l\'image';
        }
    }
}
