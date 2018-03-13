<?php
session_start();
include_once 'models/dataBase.php';
include_once 'models/articles.php';
include_once 'controllers/creer-articleController.php';
$title = 'Créer un article';
include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divCreate">
                <h1>Créer un article</h1>
                <?php foreach ($formError as $error) { ?>
                <p style="color: red"><?= $error ?></p>
                <?php } ?>
                <form method="POST" action="creer-article.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Titre de l'article</label>
                        <input class="form-control input-lg" id="articleTitle" type="text" name="title" />
                    </div>
                    <div class="form-group">
                        <label for="picture">Image article</label>
                        <input type="file" class="form-control-file" id="articleFile" name="picture" style="color: #FFB033;">
                    </div>
                    <div class="form-group">
                        <label for="resume">Résumé de l'article</label>
                        <textarea class="form-control" rows="3" name="resume"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu de l'article</label>
                        <textarea class="form-control articleTextarea" rows="15" name="content"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-warning" value="Créer article" />
                </form>
                    <p style="color: #FFB033;"><?= $insertSuccess ? 'Envoi réussi' : '' ?></p>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
