<?php
session_start();
include_once 'models/dataBase.php';
include_once 'models/owprjt_articles.php';
include_once 'controllers/creer-articleController.php';
$title = 'Créer un article';
include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divCreate">
                <h1>Modifier l'article</h1>
                <?php foreach ($formError as $error) { ?>
                <p style="color: red"><?= $error ?></p>
                <?php } ?>
                <form method="POST" action="creer-article.php?id" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputlg">Titre de l'article</label>
                        <input class="form-control input-lg" id="articleTitle" type="text" name="title" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image article</label>
                        <input type="file" class="form-control-file" id="articleFile" name="picture" style="color: #FFB033;">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Résumé de l'article</label>
                        <textarea class="form-control" id="articleTextarea" rows="2" name="resume"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Contenu de l'article</label>
                        <textarea class="form-control" id="articleTextarea" rows="15" name="content"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-warning" value="Créer article" />
                </form>
                    <p style="color: #FFB033;"><?= $insertSuccess ? 'Envoi réussi' : '' ?></p>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
