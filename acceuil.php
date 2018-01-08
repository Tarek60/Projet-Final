<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/lib/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/header-acceuil.css">
  <link rel="stylesheet" href="assets/css/acceuil.css">
  <title>Acceuil</title>
</head>
<body>
  <!--                            header                              -->
  <header>
    <a href="actualite.php"><p>Bievenue sur Overwatch FR</p></a>
    <form class="connexion" action="index.html" method="post">
      <label>E-mail : </label><input type="email" name="email" />
      <label>Mot de passe : </label><input type="password" name="password" />
      <input type="submit" name="connexion" value="Connexion">
    </form>
  </header>
  <!-- titre de bienvenue + logo -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
        <div class="titre">
          <h1>Bienvenue sur</h1>
          <img class="img-responsive" src="assets/img/logo-ow.png" alt="" id="logo-ow">
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
        <div class="divAcceuil">
          <form class="form-inscription" action="index.php" method="post">
            <h1>Formulaire d'inscription</h1>
            <label for="nom">Nom d'utilisateur : </label><input type="text" name="nom" /><br>
            <div id="space"></div>
            <label for="prenom">Adresse e-mail : </label><input type="email" name="prenom" /><br>
            <div id="space"></div>
            <label for="age">Mot de passe : </label><input type="password" name="age" value=""><br>
            <div id="space"></div>
            <label for="email">Confirmer mot de passe : </label><input type="password" name="email" /><br>
            <div id="space"></div>
            <p>Rôle principale : </p>
            <label for="dps">Dps</label><input type="checkbox" name="dps" /><br>
            <label for="tank">Tank</label><input type="checkbox" name="dps" value="tank" /><br>
            <label for="soutien">Support</label><input type="checkbox" name="dps" value="soutien" /><br>
            <div id="space"></div>
            <label for="rank">Rang compétitif : </label><select name="rank">
              <option value="nonclasse">Non-classé</option>
              <option value="bronze">Bronze 500-1499</option>
              <option value="argent">Argent 1500-1999</option>
              <option value="gold">Gold 2000-2499</option>
              <option value="platine">Platine 2500-2999</option>
              <option value="diamant">Diamant 3000-3499</option>
              <option value="master">Maitre 3500-3999</option>
              <option value="grandmaster">Grand Maitre +4000</option>
              <option value="top500">Top 500</option>
            </select><br>
            <div id="space"></div>
            <label for="plateform">Plateforme : </label><select class="" name="platform">
              <option value="pc">PC</option>
              <option value="ps4">PS4</option>
              <option value="xbox">XBOX ONE</option>
            </select><br>
            <div id="space"></div>
            <label for="battlenet">Compte battle.net : </label><input type="text" name="battlenet" /><br>
            <div id="space"></div>
            <input type="submit" name="valider" value="valider" id="valid">
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
