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
  <!-- titre de bienvenue + logo -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
        <div class="titre">
          <h1>Bienvenue sur</h1>
          <img src="assets/img/logo-ow.png" alt="" id="logo-ow">
          <h1>Overwatch FR</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- presentation du site -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
        <div class="presentation-texte">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- formulaire d'inscription -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-ls-offset-2 col-lg-8 col-lg-offset-2">
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
</body>
</html>
