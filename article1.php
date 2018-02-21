<?php 
session_start();
$title = 'Article';
include_once 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
            <div class="divArticle">
                <h1>Bande dessinée en ligne d’Overwatch « Chasse au yéti »</h1>
                <img class=img-responsive src="assets/img/article/article4.jpg" alt="" id="picture">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8">
                            <div class="section">
                                <p>
                                    Le nouvel épisode de notre série de bandes dessinées en ligne, Chasse au yéti, est arrivé !
                                    Mei et Flocon sont prêts à se lancer sur les traces du dangereux yéti qui rôde dans les pics enneigés du Népal. Mais avant qu’ils aient pu mettre en place le piège parfait, leurs projets pas si minutieusement préparés sont découverts ! Ils devront se montrer plus malins que la légendaire bête pour espérer lui échapper…
                                </p>
                                <p>
                                    Scénarisée par Robert Brooks de Blizzard et illustrée par l’artiste de la communauté Nathan « onemegawatt » Nguyen, la bande dessinée « Chasse au yéti » est dès à présent disponible sur <a href="http://comic.playoverwatch.com/fr-fr/" target="blank">http://comic.playoverwatch.com/fr-fr/.</a> Vous pouvez aussi plonger dans l’univers visuel et sonore de cette histoire (en anglais) grâce à la <a href="https://reader.madefire.com/work/w-dcb56690afda4db49a75c86af9ba993a/read/" target="blank">version animée</a> réalisée par Madefire, disponible sur PC et Mac, smartphone et Apple TV.
                                    Nous espérons que cette histoire vous plaira. Ne manquez pas les prochaines bandes dessinées d’Overwatch !<br> 
                                    Vous avez manqué les précédentes bandes dessinées ? <a href="https://playoverwatch.com/fr-fr/media/#comics-section?utm_source=desktopweb-news&utm_campaign=web-eu-desktopwebnews&utm_medium=internal&utm_content=21363034" target="blank">Découvrez-les ici.</a>
                                </p>
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
                                    <img src="assets/img/photo-profil.jpg" alt="photo de l'utilisateur" class="img-responsive img-circle" />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                </div>
                                <div class="comment">
                                    <img src="assets/img/photo-profil.jpg" alt="photo de l'utilisateur" class="img-responsive img-circle" />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                </div>
                                <div class="comment">
                                    <img src="assets/img/photo-profil.jpg" alt="photo de l'utilisateur" class="img-responsive img-circle" />
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