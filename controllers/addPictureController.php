<?php

$profilPicture = new profilePicture();
$formError = array();
$insertSuccess = false;

if (isset($_POST['submit'])) {

    if (isset($_FILES['picture'])) {
        var_dump($_FILES['picture']);
        $profilPicture->name = $_FILES['picture']['name'];
    } else {
        $formError['picture'] = 'Veuillez importer une image';
    }

    if (count($formError) == 0) {
        $insertSuccess = true;
        $profilPicture->addPicture();
    }
}
?>