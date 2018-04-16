<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/articleController.php';
include_once 'controllers/ajout-commentaireController.php';
include_once 'controllers/commentairesController.php';
$title = 'Article';
include_once 'header.php';
?>

<!-- Partie article -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
            <div class="divArticle">
                <h1><?= $articleInfo->title ?></h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section">
                                <p id="datetimeArticle">Écrit par <a href="profil.php?userId=<?= $articleInfo->id_owprjt_users ?>"><?= $articleInfo->userName ?></a>, le <?= $articleInfo->date ?> à <?= $articleInfo->hour ?></p>
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

                    <!-- Partie commentaires -->

                    <div class="row">
                        <div class="col-lg-offset-1 col-lg-10">
                            <div class="divComments">
                                <h2>Commentaires (<?= $numberComments->nbComments ?>)</h2>
                                <?php foreach ($commentDetails as $comments) { ?>
                                    <div class="commentBlock">
                                        <a href="profil.php?userId=<?= $comments->id_owprjt_users ?>">
                                            <img src="assets/img/profil/<?= $comments->picProfileName ?>" alt="photo de l'utilisateur" class="img-responsive" />
                                            <?= $comments->userName ?>
                                        </a>
                                        <span><?= $comments->date ?>, à <?= $comments->hour ?></span>
                                        <p id="commentText"><?= wordwrap($comments->content, 20, ' ', 1) ?></p>
                                        <form class="formCommentUpdate" action="article1.php?articleId=<?= $articleInfo->id ?>&updateComment=<?= $comments->id ?>" method="POST">
                                            <div class="commentUpdate">
                                                <textarea class="form-control" name="formCommentUpdate" rows="4" id="comment"><?= $comments->content ?></textarea>
                                                <button type="submit" name="submit" class="btn btn-default">Envoyer</button>
                                            </div> 
                                        </form>
                                        <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $comments->id_owprjt_users || $_SESSION['id'] == 1) { ?>
                                            <a href="article1.php?articleId=<?= $articles->id ?>&deleteComment=<?= $comments->id ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le commentaire ?')">
                                                <i class="fa fa-trash" aria-hidden="true" id="commentDel"></i>
                                            </a>
                                        <?php } ?>
                                        <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $comments->id_owprjt_users) { ?>
                                            <button id="" class="btn btn-success btnCommentUpdate">
                                                <i class="fa fa-pencil" aria-hidden="true" ></i>
                                            </button>
                                        <?php } ?>
                                        <button class="btn btn-primary btnCommentResponse">
                                            <i class="fa fa-comment" aria-hidden="true"></i>
                                        </button>
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