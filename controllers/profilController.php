<?php

// On instancie l'objet users
$users = new users();
if (isset($_GET['userId'])) {
    $users->id = $_GET['userId'];
    $userInfoProfile = $users->getUserInfoById();
}


