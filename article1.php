<?php 
session_start();
include_once 'models/dataBase.php';
include_once 'models/articles.php';
include_once 'models/comments.php';
include_once 'controllers/articleController.php';
include_once 'controllers/ajout-commentaireController.php';
include_once 'controllers/commentairesController.php';
$title = 'Article';
include_once 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
            <div class="divArticle">
                <h1><?= $articleInfo->title ?></h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section">
                                <p id="datetimeArticle">Écrit par <a href="#"><?= $articleInfo->userName ?></a>, le <?= $articleInfo->date ?> à <?= $articleInfo->hour ?></p>
                                <?= $articleInfo->content ?>
                            </div>
                            <form class="comment" action="article1.php?articleId=<?= $articleInfo->id ?>" method="post">
                                <div class="form-group">
                                    <label>Votre commentaire :</label>
                                    <textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
                                    <button type="submit" name="submit" class="btn btn-default">Envoyer</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-offset-1 col-lg-10">
                            <div class="divComments">
                                <h2>Commentaires (<?= $numberComments->nbComments ?>)</h2>
                                <div class="comment">
                                    <?php foreach ($commentDetails as $comments) { ?>
                                    <img src="assets/img/profil/<?= $comments->picProfileName ?>" alt="photo de l'utilisateur" class="img-responsive img-circle" />
                                    <a href=""><?= $comments->userName ?></a><span><?= $comments->date ?>, à <?= $comments->hour ?></span>
                                    <p><?= $comments->content ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>