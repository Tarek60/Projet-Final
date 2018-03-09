<?php

$users = new owprjt_users();
if (isset($_GET['userId'])) {
    $users->id = $_GET['userId'];
    $users->getUserInfoById();
}


?>

