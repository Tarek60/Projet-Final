<?php
include_once 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10">
            <div class="divChat">
                <h1>Bienvenue sur le chat</h1>
                <div class="content"></div>
                <textarea class="form-control" rows="1" id="chatInput"></textarea>
                <button type="submit" class="btn btn-default">Envoyer</button>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="channels">
                <h1>Channels</h1>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>