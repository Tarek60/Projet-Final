<?php

$users = new users();

if (isset($_POST['submit'])) {
    if (!empty($_POST['mail'])) {
        if ($_POST['mail'] == $users->mail) {
            echo 'le mail est bon';
        }
    }

    $users->searchUser();
}
?>