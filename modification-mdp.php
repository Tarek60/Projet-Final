<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/modification-mdpController.php';
$title = 'Profil';
include 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
            <div class="divEditProfil">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="imgUser">
                            <img src="assets/img/profil/<?= $userInfo->picProfileName ?>" alt="photo de l'utilisateur" class="img-responsive"  id="profilePicture" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <h1>Modification mot de passe</h1>
                            <form method="post" action="modification-mdp.php?userId=<?= $_SESSION['id'] ?>">
                                <h2>Mot de passe actuel : </h2>
                                <input type="password" name="oldPassword" />
                                <hr>
                                <h2>Nouveau mot de passe : </h2>
                                <input type="password" name="newPassword" />
                                <hr>
                                <h2>Confirmer nouveau mot de passe : </h2>
                                <input type="password" name="confirmNewPassword" />
                                <p id="edit"><input type="submit" name="submit" class="btn btn-success" value="Enregistrer les modifications" /></p>
                            </form>
                            <?php foreach ($formError as $error) { ?>
                                <p><?= $error ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
