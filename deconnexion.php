<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/connexionController.php';
session_unset();
session_destroy();
header('Location: /Connexion');
exit;
?>

