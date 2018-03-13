<?php
include_once 'models/dataBase.php';
include_once 'models/profilePicture.php';
include_once 'controllers/addPictureController.php';
$title = 'Ajout d\'image';
include_once 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlFile1"></label>
                <input type="file" class="form-control-file" id="articleFile" name="picture" style="color: #FFB033;">
                <input type="submit" name="submit" value="Envoyer fichier" />
            </div>
        </form>
        <p style="color: #FFB033;"><?= $insertSuccess ? 'Envoi réussi' : '' ?></p>
    </div>
</div>


<?php include_once 'footer.php'; ?>