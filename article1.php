<?php 
session_start();
include_once 'models/dataBase.php';
include_once 'models/owprjt_articles.php';
include_once 'controllers/articleController.php';
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
                                <p id="datetimeArticle">Écrit par <a href="#">Tarekool60</a>, le 01/03/2018 à 10h32</p>
                                <?= $articleInfo->content ?>
                            </div>
                            <form class="comment" action="index.html" method="post">
                                <div class="form-group">
                                    <label>Votre commentaire :</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                    <button type="submit" class="btn btn-default">Envoyer</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8">
                            <div class="divComments">
                                <h2>Commentaires (0)</h2>
                                <div class="comment">
                                    <img src="assets/img/profil/soldat76.png" alt="photo de l'utilisateur" class="img-responsive img-circle" />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
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