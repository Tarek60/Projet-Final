<?php
include_once 'configuration.php';
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
                    <p>
                        <label for="nom">Nom d'utilisateur *</label>
                        <input type="text" name="userName" value="<?= $users->userName ?>" />
                    </p>
                    <p>
                        <label for="prenom">Adresse e-mail *</label>
                        <input type="email" name="mail" value="<?= $users->mail ?>" />
                    </p>
                    <p>
                        <label for="age">Mot de passe * </label>
                        <input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" />
                    </p>
                    <p>
                        <label for="email">Confirmer mot de passe *</label>
                        <input type="password" name="passwordConfirm" value="<?= isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : '' ?>" />
                    </p>
                    <p>Rôle principal *</p>
                    <?php foreach ($roleList as $role) { ?>
                        <p><label for="role"><?= $role->role ?></label><input type="radio" name="role" value="<?= $role->id ?>" /></p>
                    <?php } ?>
                    <p><label for="rank">Rang compétitif *</label>
                        <select name="rank">
                            <option disabled selected>- Choisir un rang -</option>
                            <?php foreach ($rankList as $rank) { ?>
                                <option value="<?= $rank->id ?>"><?= $rank->rank ?></option>
                            <?php } ?>
                        </select>
                    </p>
                    <p><label for="plateform">Plateforme *</label><select name="platform">
                            <option disabled selected>- Choisir une plateforme -</option>
                            <?php foreach ($platformList as $platform) { ?>
                                <option value="<?= $platform->id ?>"><?= $platform->platform ?></option>
                            <?php } ?>
                        </select></p>
                    <p><label for="account">Compte battle.net *</label><input type="text" name="account" value="<?= $users->account ?>" /></p>
                    <input class="btn btn-warning" type="submit" name="submit" value="Enregistrer" id="submit">
                </form>
            </div>
            <!-- On affiche un message pour montrer que le formulaire à bien été envoyer -->
            <?php if ($insertSuccess) { ?>
                <div class="alert alert-success" role="alert"><?= $insertSuccess ? 'Votre compte à bien été enregistrer. Vous pouvez maintenant vous ' : '' ?>
                    <a href="connexion.php">connecter</a></div>
            <?php } ?>
            <!-- On affiche les erreurs si il y en a -->
            <?php foreach ($formError as $error) { ?>
                <div class="alert alert-danger" role="alert"><?= $error ?></div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>