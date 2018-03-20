<?php
session_start();
include_once 'configuration.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/connexionController.php';
$title = 'Sujet';
include('header.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
            <!-- Div ui contient l'ensemble des messages -->
            <div class="divSujet">
                <h1>Titre du sujet</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Div qui contient le contenu d'un message -->
                        <div class="sujetText">
                            <div class="row">
                                <div class="col-lg-3">
                                    <!-- Div contenant les info de l'user -->
                                    <div class="infoUser">
                                        <p><?= $_SESSION['userName']; ?></p>
                                        <img src="assets/img/profil/soldat76.png" alt="photo de l'utilisateur" class="img-responsive" />
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="text">
                                        <p>Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi plus praemii de figmentis aereis sensu carentibus adepturi, quam ex conscientia honeste recteque factorum, easque auro curant inbracteari, quod Acilio Glabrioni delatum est primo, cum consiliis armisque regem superasset Antiochum. quam autem sit pulchrum exigua haec spernentem et minima ad ascensus verae gloriae tendere longos et arduos, ut memorat vates Ascraeus, Censorius Cato monstravit. qui interrogatus quam ob rem inter multos... statuam non haberet malo inquit ambigere bonos quam ob rem id non meruerim, quam quod est gravius cur inpetraverim mussitare.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="width: 50%;">
                        <div class="sujetText">
                            <div class="row">
                                <div class="col-lg-3">
                                    <!-- Div contenant les info de l'user -->
                                    <div class="infoUser">
                                        <p><?= $_SESSION['userName']; ?></p>
                                        <img src="assets/img/profil/soldat76.png" alt="photo de l'utilisateur" class="img-responsive" />
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="text">
                                        <p>Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi plus praemii de figmentis aereis sensu carentibus adepturi, quam ex conscientia honeste recteque factorum, easque auro curant inbracteari, quod Acilio Glabrioni delatum est primo, cum consiliis armisque regem superasset Antiochum. quam autem sit pulchrum exigua haec spernentem et minima ad ascensus verae gloriae tendere longos et arduos, ut memorat vates Ascraeus, Censorius Cato monstravit. qui interrogatus quam ob rem inter multos... statuam non haberet malo inquit ambigere bonos quam ob rem id non meruerim, quam quod est gravius cur inpetraverim mussitare.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="width: 50%;">
                        <form method="POST" action="creer-article.php">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Répondre : </label>
                                <textarea class="form-control" id="sujetTextarea" rows="5" name="content"></textarea>
                            </div>
                            <input type="submit" name="submit" value="Envoyer" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>