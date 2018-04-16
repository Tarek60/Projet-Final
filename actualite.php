<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/liste-articlesController.php';
$title = 'Actualités';
include_once 'header.php';
?>
<!-- Liste des articles -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="divNews">
                <h1>Dernières nouveautés Overwatch</h1>
                <?php if (isset($_SESSION['id_owprjt_userCategory']) && $_SESSION['id_owprjt_userCategory'] == 1 || $_SESSION['id_owprjt_userCategory'] == 3) { ?>
                    <a href="Créer-un-article" class="btn btn-warning">Créer nouvel article</a>
                <?php } ?>
                <?php foreach ($articlesList as $articles) { ?>
                    <div class="article">
                        <a href="article1.php?articleId=<?= $articles->id ?>">
                            <img class=img-responsive src="assets/img/article/<?= $articles->picture; ?>" alt="" id="picture">
                            <h2><?= $articles->title; ?></h2>
                        </a>
                        <p><?= $articles->resume; ?></p>
                        <a href="article1.php?articleId=<?= $articles->id ?>" class="btn btn-primary">Lire la suite</a>
                        <?php if (isset($_SESSION['id_owprjt_userCategory']) && $_SESSION['id'] == $articles->id_owprjt_users) { ?>
                            <a href="modification-article.php?articleId=<?= $articles->id ?>" class="btn btn-info">Modifier l'article</a>
                        <?php } ?>
                        <?php if (isset($_SESSION['id_owprjt_userCategory']) && $_SESSION['id_owprjt_userCategory'] == 1 || $_SESSION['id'] == $articles->id_owprjt_users) { ?>
                            <a href="actualite.php?deleteArticle=<?= $articles->id ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer l\'article ?')">Supprimer l'article</a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
