<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/modification-profilController.php';
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Choisir une image</button>
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
                                            <form method="post" action="modification-profil.php?userId=<?= $_SESSION['id'] ?>">
                                                <?php foreach ($listPictures as $pictures) { ?>
                                                    <input type="image" name="profilePicture" src="assets/img/profil/<?= $pictures->picProfileName ?>" id="<?= $pictures->picProfileName ?>" class="profilePicture" />
                                                <?php } ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <h1>Informations profil</h1>
                            <form method="post" action="modification-profil.php?userId=<?= $_SESSION['id'] ?>">
                                <h2>Pseudo :</h2>
                                <p><?= $userInfo->userName ?></p>
                                <hr>
                                <h2>Adresse email :</h2>
                                <p><?= $userInfo->mail ?></p>
                                <hr>
                                <h2>Catégorie : </h2>
                                <p><?= $userInfo->userCategoryName ?></p>
                                <hr>
                                <h2>Plateforme : </h2>
                                <select name="platform">
                                    <?php foreach ($platformList as $platform) { ?>
                                        <option value="<?= $platform->id ?>" <?= $userInfo->platform == $platform->platform ? 'selected' : '' ?>><?= $platform->platform ?></option>
                                    <?php } ?>
                                </select>
                                <hr>
                                <h2>Rôle principal :</h2>
                                <select name="role">
                                    <?php foreach ($roleList as $role) { ?>
                                        <option value="<?= $role->id ?>" <?= $userInfo->role == $role->role ? 'selected' : '' ?>><?= $role->role ?></option>
                                    <?php } ?> 
                                </select>
                                <hr>
                                <h2>Rang actuel :</h2>
                                <select name="rank">
                                    <?php foreach ($rankList as $rank) { ?>
                                        <option value="<?= $rank->id ?>" <?= $userInfo->rank == $rank->rank ? 'selected' : '' ?>><?= $rank->rank ?></option>
                                    <?php } ?> 
                                </select>
                                <hr>
                                <h2>Compte battle.net :</h2>
                                <input type="text" name="account" value="<?= $userInfo->account ?>" />
                                <p id="edit"><input type="submit" name="submit" class="btn btn-success" value="Enregistrer les modifications" /></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
