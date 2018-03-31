<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/modification-emailController.php';
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
                            <h1>Modification adresse email</h1>
                            <form method="post" action="modification-email.php?userId=<?= $_SESSION['id'] ?>">
                                <h2>Adresse email actuelle : </h2>
                                <input type="email" name="oldEmail" />
                                <hr>
                                <h2>Nouvelle adresse email : </h2>
                                <input type="email" name="newEmail" />
                                <hr>
                                <h2>Confirmer nouvelle adresse email : </h2>
                                <input type="email" name="confirmNewEmail" />
                                <p id="edit"><input type="submit" name="submit" class="btn btn-success" value="Enregistrer les modifications" /></p>
                            </form>
                            <?php foreach ($formError as $error) { ?>
                                <p><?= $error ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <p style="color: #FFB033"><?= $insertSuccess ? 'Votre adresse email a bien été modifier' : '' ?></p>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>

