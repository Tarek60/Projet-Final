<?php
session_start();
$title = 'Chat';
include_once 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <div class="divChat">
                <h1>Chatbox</h1>
                <div class="chat-box">
                    <div class="chat-message">
                        <div class="message-content">
                            <a href="#" id="userName"> 
                                <img src="assets/img/profil/lucio.png" id="user-picture"/>
                                <span>Jeankevin_du_02</span>
                            </a>
                            <span id="user-message"> : Salut</span>
                        </div>
                        <div class="message-content">
                            <a href="#" id="userName"> 
                                <img src="assets/img/profil/soldat76.png" id="user-picture"/>
                                <span>Tarekool60</span>
                            </a>
                            <span id="user-message"> : T'es qui ?</span>
                        </div>
                        <div class="message-content">
                            <a href="#" id="userName"> 
                                <img src="assets/img/profil/lucio.png" id="user-picture"/>
                                <span>Jeankevin_du_02</span>
                            </a>
                            <span id="user-message"> : Je m'appelle Kevin</span>
                        </div>
                        <div class="message-content">
                            <a href="#" id="userName"> 
                                <img src="assets/img/profil/soldat76.png" id="user-picture"/>
                                <span>Tarekool60</span>
                            </a>
                            <span id="user-message"> : D'accord</span>
                        </div>
                        <div class="message-content">
                            <a href="#" id="userName"> 
                                <img src="assets/img/profil/lucio.png" id="user-picture"/>
                                <span>Jeankevin_du_02</span>
                            </a>
                            <span id="user-message"> : Tu veux jouer ?</span>
                        </div>
                        <div class="message-content">
                            <a href="#" id="userName"> 
                                <img src="assets/img/profil/soldat76.png" id="user-picture"/>
                                <span>Tarekool60</span>
                            </a>
                            <span id="user-message"> : Non</span>
                        </div>
                        <div class="message-content">
                            <a href="#" id="userName"> 
                                <img src="assets/img/profil/lucio.png" id="user-picture"/>
                                <span>Jeankevin_du_02</span>
                            </a>
                            <span id="user-message"> : Ok</span>
                        </div>

                    </div>
                </div>
                <form>
                    <textarea class="form-control" rows="1" id="chatInput"></textarea>
                    <button type="submit" class="btn btn-default">Envoyer</button>
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