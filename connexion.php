<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/connexionController.php';
include_once 'header-accueil.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-ls-offset-2 col-lg-8 col-lg-offset-2">     
            <div class="divLogin">
                <form class="connexion" action="connexion.php" method="post">
                    <h1>Connexion</h1>
                    <p><label for="mail">Adresse e-mail</label><input type="mail" name="mail" value="<?= $users->mail ?>" /></p>
                    <p><label for="password">Mot de passe</label><input type="password" name="password" /></p>
                    <input type="submit" name="submit" value="Se connecter" class="btn btn-warning" id="submit">
                </form>
            </div>
            <?php foreach ($formError as $error) {
                ?>
                <div class="alert alert-danger" role="alert"><?= $error ?></div>
                <?php
            }
            ?>
        </div>
    </div>
</div>