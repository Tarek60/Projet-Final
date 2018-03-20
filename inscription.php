<?php
include_once 'configuration.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/inscriptionController.php';
include_once 'header-accueil.php';
?>
<!-- formulaire d'inscription -->
<div class="container-fluid">
    <div class="row">
        <div class="col-ls-offset-2 col-lg-8 col-lg-offset-2">
            <div class="divRegistration">
                <form class="form-inscription" action="inscription.php" method="post">
                    <h1>Inscription</h1>
                    <!-- On afficher les erreurs si il y en a -->
                    <?php foreach ($formError as $error) { ?>
                        <p><?= $error ?></p>
                    <?php } ?>
                    <p><label for="nom">Nom d'utilisateur *</label><input type="text" name="userName" value="<?= $users->userName ?>" /></p>
                    <p><label for="prenom">Adresse e-mail *</label><input type="email" name="mail" value="<?= $users->mail ?>" /></p>
                    <p><label for="age">Mot de passe * </label><input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" /></p>
                    <p><label for="email">Confirmer mot de passe *</label><input type="password" name="passwordConfirm" value="<?= isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : '' ?>" /></p>
                    <p>Rôle principal *</p>
                    <p><label for="role">Dps</label><input type="radio" name="role" value="Dps<?= $users->role ?>" /></p>
                    <p><label for="role">Tank</label><input type="radio" name="role" value="Tank<?= $users->role ?>" /></p>
                    <p><label for="role">Support</label><input type="radio" name="role" value="Support<?= $users->role ?>" /></p>
                    <p><label for="rank">Rang compétitif *</label><select name="rank" value="<?= $users->rank ?>" >
                            <option>Non-classé</option>
                            <option>Bronze 500-1499</option>
                            <option>Argent 1500-1999</option>
                            <option>Gold 2000-2499</option>
                            <option>Platine 2500-2999</option>
                            <option>Diamant 3000-3499</option>
                            <option>Maitre 3500-3999</option>
                            <option>Grand Maitre +4000</option>
                            <option>Top 500</option>
                        </select></p>
                    <p><label for="plateform">Plateforme *</label><select name="platform" value="<?= $users->platform ?>" >
                            <option >PC</option>
                            <option>PS4</option>
                            <option>XBOX ONE</option>
                        </select></p>
                    <p><label for="battlenet">Compte battle.net *</label><input type="text" name="battlenetAccount" value="<?= $users->battlenetAccount ?>" /></p>
                    <input class="btn btn-warning" type="submit" name="submit" value="Enregistrer" id="submit">
                </form>
            </div>
                <!-- On afficher un message pour montrer que le formulaire à bien été envoyer -->
                <?php if ($insertSuccess) { ?>
                <div class="alert alert-success" role="alert"><?= $insertSuccess ? 'Envoi réussi' : '' ?></div>
                <?php } ?>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>