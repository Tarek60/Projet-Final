<?php
session_start();
include_once 'configuration.php';
include_once 'models/dataBase.php';
include_once 'models/articles.php';
include_once 'controllers/articleController.php';
include_once 'controllers/modification-articleController.php';
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
                <form method="POST" action="modification-article.php?articleId=<?= $articleInfo->id ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputlg">Titre de l'article</label>
                        <input class="form-control input-lg" id="articleTitle" type="text" name="title" value="<?= $articleInfo->title ?>" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image article</label>
                        <input type="file" class="form-control-file" id="articleFile" name="picture" style="color: #FFB033;" value="<?= $articleInfo->picture ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Résumé de l'article</label>
                        <textarea class="form-control" rows="2" name="resume"><?= $articleInfo->resume ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Contenu de l'article</label>
                        <textarea class="form-control articleTextarea" rows="15" name="content"><?= $articleInfo->content ?></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-warning" value="Modifier article" />
                </form>
                    <p style="color: #FFB033;"><?= $insertSuccess ? 'Modification réussi' : '' ?></p>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
