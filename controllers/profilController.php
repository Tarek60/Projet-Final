<?php

$users = new users();
if (isset($_GET['userId'])) {
    $users->id = $_GET['userId'];
    $userInfo = $users->getUserInfoById();
}


?>

