<?php
session_start();
include_once 'models/dataBase.php';
include_once 'models/owprjt_users.php';
include_once 'models/owprjt_profilePicture.php';
include_once 'controllers/profilController.php';
include_once 'controllers/liste-imagesController.php';
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
                            <img src="assets/img/profil/soldat76.png" alt="photo de l'utilisateur" class="img-responsive"  id="profilePicture" />
                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Choisir une image</button> -->
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLongTitle">Sélectionner une image</h2>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="profil.php" method="POST">
                                                <?php foreach ($listPictures as $pictures) { ?>
                                                    <input type="image" name="profilePicture" src="assets/img/profil/<?= $pictures->name ?>" />
                                                <?php } ?>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            <button type="button" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <h1>Informations profil</h1>
                            <h2>Pseudo :</h2>
                            <p><?= $users->userName ?></p>
                            <hr>
                            <h2>Adresse email :</h2>
                            <p><?= $users->mail ?></p>
                            <hr>
                            <h2>Plateforme : </h2>
                            <p><?= $users->platform ?></p>
                            <hr>
                            <h2>Rôle principal :</h2>
                            <p><?= $users->role ?></p>
                            <hr>
                            <h2>Rang actuel :</h2>
                            <p><?= $users->rank ?></p>
                            <hr>
                            <h2>Compte battle.net :</h2>
                            <p><?= $users->battlenetAccount ?></p>
                        </div>
                    </div>
                </div>
                <p id="edit"><a href="modification-profil.php?userId=<?= $_SESSION['id'] ?>" name="submit" class="btn btn-primary">Modifier le profil</a></p>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
