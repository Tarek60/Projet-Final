<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/profilController.php';

$title = 'Profil';
include 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
            <div class="divProfil">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="imgUser">
                            <img src="assets/img/profil/<?= $userInfoProfile->picProfileName ?>" alt="photo de l'utilisateur" class="img-responsive"  id="profilePicture" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <h1>Informations profil</h1>
                            <h2>Pseudo :</h2>
                            <p><?= $userInfoProfile->userName ?></p>
                            <hr>
                            <h2>Adresse email :</h2>
                            <p><?= $userInfoProfile->mail ?></p>
                            <hr>
                            <h2>Catégorie : </h2>
                            <p><?= $userInfoProfile->userCategoryName ?></p>
                            <hr>
                            <h2>Plateforme : </h2>
                            <p><?= $userInfoProfile->platform ?></p>
                            <hr>
                            <h2>Rôle principal :</h2>
                            <p><?= $userInfoProfile->role ?></p>
                            <hr>
                            <h2>Rang actuel :</h2>
                            <p><?= $userInfoProfile->rank ?></p>
                            <hr>
                            <h2>Compte battle.net :</h2>
                            <p><?= $userInfoProfile->account ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>