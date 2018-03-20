<?php
session_start();
include_once 'configuration.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/connexionController.php';
session_unset();
session_destroy();
header('Location: connexion.php');
exit;
?>

