<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/acceuil.css">
    <title>Acceuil</title>
  </head>
  <body>
      <?php include('header-acceuil.php') ?>
      <div class="inscription">
        <h2>Vous êtes nouveau ? Veuillez remplir le formulaire ci-dessous :</h2>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-offset-7 col-lg-5">
              <div class="block-inscription">
                <form class="form-inscription" action="index.php" method="post">
                  <label>Nom : </label><input type="text" name="nom" /><br>
                  <div id="space"></div>
                  <label>Prénom : </label><input type="text" name="prenom" /><br>
                  <div id="space"></div>
                  <label>Votre âge : </label><input type="text" name="age" value=""><br>
                  <div id="space"></div>
                  <label>Adresse e-mail : </label><input type="email" name="email" /><br>
                  <div id="space"></div>
                  <label>Confirmer adresse e-mail :</label><input type="email" name="confirm-email" /><br>
                  <div id="space"></div>
                  <label>Mot de passe : </label><input type="password" name="password" /><br>
                  <div id="space"></div>
                  <label>Confirmer mot de passe</label><input type="password" name="confir-password" /><br>
                  <div id="space"></div>
                  <input type="submit" name="valider" value="valider">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
