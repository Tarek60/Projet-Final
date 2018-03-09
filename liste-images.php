<?php
include_once 'models/dataBase.php';
include_once 'models/owprjt_profilePicture.php';
include_once 'controllers/liste-imagesController.php';
$title = 'Liste d\'image';
include_once 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php foreach($listPictures as $pictures) { ?>
            <img src="assets/img/profil/<?= $pictures->name ?>" />
            <?php } ?>
        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>