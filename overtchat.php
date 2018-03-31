<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/overchatController.php';
$title = 'Chat';
include_once 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <div class="divChat">
                <h1>Chatbox</h1>
                <div class="chat-box">
                    <div class="chat-message" id="chat-message">
                        <?php foreach ($messagesList as $message) { ?>
                            <div class="message-content" id="message-content">
                                <a href="profil.php?userId=<?= $message->id_owprjt_users ?>" id="userName"> 
                                    <img src="assets/img/profil/<?= $message->picProfileName ?>" id="user-picture"/>
                                    <span><?= $message->userName ?></span>
                                </a>
                                <span id="user-message"> : <?= wordwrap($message->content, 20, ' ', 1) ?></span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <form action="overtchat.php" method="POST">
                    <textarea class="form-control" name="sendMessage" rows="1" id="chatInput"></textarea>
                    <button type="submit" name="submit" class="btn btn-default" id="sendButton">Envoyer</button>
                </form>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="channels">
                <h1>Canaux</h1>
                <a href="#">#général</a>
                <a href="#">#média</a>
                <a href="#">#recherche-joueurs</a>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>