<?php
session_start();
include_once 'configuration.php';
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
                                <?php foreach ($commentDetails as $comments) { ?>
                                    <div class="commentBlock">
                                        <img src="assets/img/profil/<?= $comments->picProfileName ?>" alt="photo de l'utilisateur" class="img-responsive" />
                                        <a href=""><?= $comments->userName ?></a>
                                        <span><?= $comments->date ?>, à <?= $comments->hour ?></span>
                                        <p id="commentText"><?= $comments->content ?></p>
                                        <?php foreach ($formError as $error) { ?>
                                            <p><?= $error ?></p>
                                        <?php } ?>
                                        <form class="formCommentUpdate" action="article1.php?articleId=<?= $articleInfo->id ?>&updateComment=<?= $comments->id ?>" method="post">
                                            <div class="commentUpdate">
                                                <textarea class="form-control" name="formCommentUpdate" rows="4" id="comment"><?= $comments->content ?></textarea>
                                                <button type="submit" name="submit" class="btn btn-default">Envoyer</button>
                                            </div> 
                                        </form>
                                        <a href="article1.php?articleId=<?= $articles->id ?>&deleteComment=<?= $comments->id ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le commentaire ?')">
                                            <i class="fa fa-trash" aria-hidden="true" id="commentDel"></i>
                                        </a>
                                        <button id="" class="btn btn-success btnCommentUpdate">
                                            <i class="fa fa-pencil" aria-hidden="true" ></i>
                                        </button>
                                        </a>
                                        <button class="btn btn-primary btnCommentResponse">
                                            <i class="fa fa-comment" aria-hidden="true"></i>
                                        </button>
                                        <form class="formCommentResponse" action="article1.php?articleId=<?= $articleInfo->id ?>" method="post">
                                            <div class="formCommentResponse">
                                                <textarea class="form-control" name="formCommentResponse" rows="4" id="comment"></textarea>
                                                <button type="submit" name="submit" class="btn btn-default">Envoyer</button>
                                            </div> 
                                        </form>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>