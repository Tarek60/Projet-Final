<?php

$formError = array();

if (isset($_POST['ajaxReady'])) {
    session_start();
    include_once '../configuration.php';
    $messages = new messages();
    $formError = array();
    $messages->id_owprjt_users = $_SESSION['id'];
    if (!empty($_POST['message'])) {
        $messages->content = htmlspecialchars($_POST['message']);
    } else {
        $formError['comment'] = 'Veuillez rentrer un message valide';
    }

    if (count($formError) == 0) {
        $messages->addMessage();
    }

    $messagesList = $messages->getMessagesList();
    echo json_encode($messagesList);
} else {
    $messages = new messages();
    if (isset($_POST['submit'])) {
        $messages->id_owprjt_users = $_SESSION['id'];
        if (!empty($_POST['sendMessage'])) {
            $messages->content = htmlspecialchars($_POST['sendMessage']);
        } else {
            $formError['comment'] = 'Veuillez rentrer un message valide';
        }

        if (count($formError) == 0) {
            $messages->addMessage();
        }
    }

    $messagesList = $messages->getMessagesList();
}



