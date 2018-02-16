<?php 
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/connexionController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/lib/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet"> 
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php"><img class="img-responsive img-circle" src="assets/img/logo-ow.png" alt="" id="logoNavbar"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                 
                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="accueil.php">Accueil</a></li>
                            <li><a href="actualite.php">News</a></li>
                            <li><a href="overtchat.php">Overchat</a></li>
                            <li><a href="forum.php">Forum</a></li>
                        </ul>
                        <ul class="navbar-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="assets/img/photo-profil.jpg" alt="photo de l'utilisateur" class="img-responsive img-circle" id="iconProfil"/></a>
                            <ul class="dropdown-menu">
                                <li><a href="profil.php">Voir/Modifier profil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="deconnexion.php">Déconnexion</a></li>
                            </ul>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
