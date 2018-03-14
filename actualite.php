<?php
session_start();
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/profilePicture.php';
include_once 'models/articles.php';
include_once 'controllers/profilController.php';
include_once 'controllers/liste-articlesController.php';
include_once 'controllers/liste-imagesController.php';
$title = 'Actualités';
include_once 'header.php';
?>
<!-- Liste des articles -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="divNews">
                <h1>Dernières nouveautés Overwatch</h1>
                <a href="creer-article.php" class="btn btn-warning">Créer nouvel article</a>
                <?php foreach ($articlesList as $articles) { ?>
                    <div class="article">
                        <a href="article1.php?articleId=<?= $articles->id ?>">
                            <img class=img-responsive src="assets/img/article/<?= $articles->picture; ?>" alt="" id="picture">
                            <h2><?= $articles->title; ?></h2>
                        </a>
                        <p><?= $articles->resume; ?></p>
                        <a href="article1.php?articleId=<?= $articles->id ?>" class="btn btn-primary">Lire la suite</a>
                        <a href="modification-article.php?articleId=<?= $articles->id ?>" class="btn btn-info">Modifier l'article</a>
                        <a href="actualite.php?deleteArticle=<?= $articles->id ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer l\'article ?')">Supprimer l'article</a>
                    </div>
                    <br>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
