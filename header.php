<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/lib/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title><?php $title = 'Header';
echo $title; ?></title>
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
                        <a class="navbar-brand" href="#">Overwatch FR</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="acceuil.php">Acceuil</a></li>
                            <li><a href="actualite.php">News</a></li>
                            <li><a href="#">Médias</a></li>
                            <li><a href="#">Overtchat</a></li>
                            <li><a href="forum.php">Forum</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profil.php">Voir/Modifier profil</a></li>
                                    <li><a href="#">Amis</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <script src="assets/lib/jquery-3.2.1.js"></script>
        <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
