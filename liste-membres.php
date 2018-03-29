<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/liste-membresControlleur.php';
$title = 'Liste-membres';
include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divList">
                <h1>Liste des membres</h1>
                <table border="1" class="table table-rdv">
                    <thead>
                        <tr>
                            <th>Pseudo du membres</th>
                            <th>Adresse email</th>
                            <th>Modifier le rôle</th>
                            <th>Supprimer le membre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usersList as $user) { ?>
                            <tr>
                                <td><?= $user->userName ?></td>
                                <td><?= $user->mail ?></td>
                                <td>
                                    <select name="rank">
                                        <?php foreach ($userCategoryList as $userCategory) { ?>
                                            <option value="<?= $userCategory->id ?>" ><?= $userCategory->userCategoryName ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>