<?php
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/connexionController.php';
include_once 'header-accueil.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-ls-offset-2 col-lg-8 col-lg-offset-2">     
            <div class="divConnexion">
                <form class="connexion" action="connexion.php" method="post">
                    <h1>Connexion</h1>
                    <p><label for="mail">Adresse e-mail : </label><input type="mail" name="mail" value="<?= $users->mail ?>" /></p>
                    <p><label for="password">Mot de passe : </label><input type="password" name="password" /></p>
                    <input type="submit" name="submit" value="Connexion" class="btn btn-warning" id="submit">
                </form>
            </div>
            <?php if ($insertSuccess) { ?>
                <p>Pseudo : <?= $_SESSION['userName']; ?></p>
                <p>Adresse email : <?= $_SESSION['mail']; ?></p>
                <p>Role : <?= $_SESSION['role']; ?></p>
                <p>Rang : <?= $_SESSION['rank']; ?></p>
                <p>Platforme : <?= $_SESSION['platform']; ?></p>
                <p>Compte battle.net : <?= $_SESSION['battlenetAccount']; ?></p>
                <?php
            } else {
                foreach ($formError as $error) {
                    ?>
                    <p><?= $error ?></p>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>