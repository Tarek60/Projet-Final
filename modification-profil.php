<?php
session_start();
include_once 'models/dataBase.php';
include_once 'models/owprjt_users.php';
include_once 'models/owprjt_profilePicture.php';
include_once 'controllers/liste-imagesController.php';
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
                            <img src="assets/img/profil/soldat76.png" alt="photo de l'utilisateur" class="img-responsive"  id="profilePicture" />
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
                                            <form action="profil.php" method="POST">
                                                <?php foreach ($listPictures as $pictures) { ?>
                                                    <form method="post" action="modification-profil.php?userId=<?= $_SESSION['id'] ?>">
                                                        <input type="image" name="profilePicture" src="assets/img/profil/<?= $pictures->name ?>" />
                                                    </form>
                                                <?php } ?>
                                            </form>
                                        </div>
                                        <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            <button type="button" class="btn btn-primary">Enregistrer</button>
                                        </div> -->
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
                                <p><?= $users->userName ?></p>
                                <hr>
                                <h2>Adresse email :</h2>
                                <p><?= $users->mail ?></p>
                                <hr>
                                <h2>Plateforme : </h2>
                                <select name="platform">
                                    <option value="PC" <?= $users->platform == 'PC' ? 'selected' : '' ?>>PC</option>
                                    <option value="PS4" <?= $users->platform == 'PS4' ? 'selected' : '' ?>>PS4</option>
                                    <option value="XBOX ONE" <?= $users->platform == 'XBOX ONE' ? 'selected' : '' ?>>XBOX ONE</option>
                                </select>
                                <hr>
                                <h2>Rôle principal :</h2>
                                <select name="role">
                                    <option value="Dps" <?= $users->role == 'Dps' ? 'selected' : '' ?>>Dps</option>
                                    <option value="Tank" <?= $users->role == 'Tank' ? 'selected' : '' ?>>Tank</option>
                                    <option value="Support" <?= $users->role == 'Support' ? 'selected' : '' ?>>Support</option>
                                </select>
                                <hr>
                                <h2>Rang actuel :</h2>
                                <select name="rank">
                                    <option value="Non-classé" <?= $users->rank == 'Non-classé' ? 'selected' : '' ?>>Non-classé</option>
                                    <option value="Bronze 500-1499" <?= $users->rank == 'Bronze 500-1499' ? 'selected' : '' ?>>Bronze 500-1499</option>
                                    <option value="Argent 1500-1999" <?= $users->rank == 'Argent 1500-1999' ? 'selected' : '' ?>>Argent 1500-1999</option>
                                    <option value="Gold 2000-2499" <?= $users->rank == 'Gold 2000-2499' ? 'selected' : '' ?>>Gold 2000-2499</option>
                                    <option value="Platine 2500-2999" <?= $users->rank == 'Platine 2500-2999' ? 'selected' : '' ?>>Platine 2500-2999</option>
                                    <option value="Diamant 3000-3499" <?= $users->rank == 'Diamant 3000-3499' ? 'selected' : '' ?>>Diamant 3000-3499</option>
                                    <option value="Maitre 3500-3999" <?= $users->rank == 'Maitre 3500-3999' ? 'selected' : '' ?>>Maitre 3500-3999</option>
                                    <option value="Grand Maitre +4000" <?= $users->rank == 'Grand Maitre +4000' ? 'selected' : '' ?>>Grand Maitre +4000</option>
                                    <option value="Top 500" <?= $users->rank == 'Top 500' ? 'selected' : '' ?>>Top 500</option>
                                </select>
                                <hr>
                                <h2>Compte battle.net :</h2>
                                <input type="text" name="battlenetAccount" value="<?= $users->battlenetAccount ?>" />
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
