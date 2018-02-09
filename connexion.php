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
                <p><label for="email">Pseudo : </label><input type="mail" name="mail" value="" style="color: black;"/></p>
                    <p><label for="password">Mot de passe : </label><input type="password" name="password" style="color: black;" /></p>
                    <input type="submit" name="submit" value="Connexion" class="btn btn-warning" id="submit">
                </form>
            </div>
        </div>
    </div>
</div>