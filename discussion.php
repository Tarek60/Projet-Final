<?php
$title = 'Discussion générale';
include('header.php')
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
            <div class="divDiscussion">
                <h1>Discussions générales</h1>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <table class="table discussion-table">
                    <thead>
                        <tr>
                            <th>Sujet</th>
                            <th>Auteur</th>
                            <th>Dernier message</th>
                            <th>Réponses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="sujet.php">Sujet numero 1</a></td>
                            <td>Utilisateur1</td>
                            <td>09/01/2017</td>
                            <td>0</td>
                        </tr>

                        <tr>
                            <td><a href="sujet.php">Sujet numero 1</a></td>
                            <td>Utilisateur1</td>
                            <td>09/01/2017</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><a href="sujet.php">Sujet numero 1</a></td>
                            <td>Utilisateur1</td>
                            <td>09/01/2017</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td><a href="sujet.php">Sujet numero 1</a></td>
                            <td>Utilisateur1</td>
                            <td>09/01/2017</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>