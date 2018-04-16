<?php
session_start();
include_once 'configuration.php';
include_once 'controllers/liste-membresController.php';
$title = 'Liste-membres';
include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divList">
                <h1>Liste des membres</h1>
                <?php foreach ($formError as $error) { ?>
                    <p><?= $error ?></p>
                <?php } ?>
                <table border="1" class="table table-rdv">
                    <thead>
                        <tr>
                            <th>Pseudo du membre</th>
                            <th>Adresse email</th>
                            <th>Voir le profil</th>
                            <th>Catégorie</th>
                            <th>Modifier catégorie</th>
                            <th>Supprimer le membre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usersList as $user) { ?>
                            <tr>
                                <td><?= $user->userName ?></td>
                                <td><?= $user->mail ?></td>
                                <td>
                                    <a href="profil.php?userId=<?= $user->id ?>" class="btn btn-warning">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td>
                                    <p><?= $user->userCategoryName?></p>
                                </td>
                                <td>
                                    <form action="liste-membres.php?userId=<?= $user->id ?>" method="POST">
                                        <select name="userCategory">
                                            <?php foreach ($userCategoryList as $userCategory) { ?>
                                                <option value="<?= $userCategory->id ?>" <?= $user->id_owprjt_userCategory == $userCategory->id ? 'selected' : '' ?>><?= $userCategory->userCategoryName ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="submit" name="submit" value="Valider"/>
                                    </form>
                                </td>
                                <td>
                                    <a href="liste-membres.php?deleteUser=<?= $user->id ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le membre ?')">
                                        <i class="fa fa-trash" aria-hidden="true" id="commentDel"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if ($insertSuccess) { ?>
                    <p>Envoi réussi</p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>