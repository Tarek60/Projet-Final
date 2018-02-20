<?php
session_start();
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/connexionController.php';
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
                            <img src="assets/img/photo-profil.jpg" alt="photo de l'utilisateur" class="img-responsive img-thumbnail" /><br>
                            <input type="button" name="" value="Modifier" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <h1>Informations profil</h1>
                            <h2>Pseudo :</h2>
                            <p><?= $_SESSION['userName']; ?></p>
                            <hr>
                            <h2>Adresse email :</h2>
                            <p><?= $_SESSION['mail']; ?></p>
                            <hr>
                            <h2>Plateforme : </h2>
                            <p><?= $_SESSION['platform']; ?></p>
                            <hr>
                            <h2>Rôle principal :</h2>
                            <p><?= $_SESSION['role']; ?></p>
                            <hr>
                            <h2>Rang actuel :</h2>
                            <p><?= $_SESSION['rank']; ?></p>
                            <hr>
                            <h2>Compte battle.net :</h2>
                            <p><?= $_SESSION['battlenetAccount']; ?></p>
                            <hr>
                            <input type="submit" name="" value="Modifier">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
