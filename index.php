<?php 
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'header-accueil.php';
?>
    <!-- titre de bienvenue + logo -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
                <div class="titre">
                    <h1>Bienvenue sur Overchat</h1>
                    <img class="img-responsive" src="assets/img/logo-ow.png" alt="" id="logo-ow">
                </div>
            </div>
        </div>
    </div>
    <!-- presentation du site -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
                <div class="presentation-texte">
                    <p>"Overchat" est un site communautaire centré autour du jeu Overwatch. Les fans du jeu peuvent s'inscrire via un formulaire simple et intuitif, où ils pourront indiquer notamment leur rôle principal (dps, tank, support) et leur rang compétitif afin de facilité la recherche de joueurs. Ils peuvent s'informer des dernières nouveautés gràce à une liste d'articles mis à jour régulièrement.
                        Le site est doté d'un chat virtuel, où les joueurs peuvent communiquer très facilement via différents canaux dédier à certains sujet (ex : #général, #recherche-joueurs...).
                        Un forum de discussions est également disponible permettant au joueurs de poster différents sujets concernant le jeu.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>
</html>
