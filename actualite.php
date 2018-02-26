<?php
session_start();
include_once 'models/dataBase.php';
include_once 'models/owprjt_articles.php';
include_once 'controllers/liste-articlesController.php';
$title = 'Actualités';
include('header.php')
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
                        <a href="article1.php">
                            <img class=img-responsive src="assets/img/article/<?= $articles->picture; ?>" alt="" id="picture">
                            <h2><?= $articles->title; ?></h2>
                        </a>
                        <p><?= $articles->resume; ?></p>
                    </div>
                <br>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
