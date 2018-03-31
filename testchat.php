<?php
// on se connecte à notre base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tchat', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['submit'])) { // si on a envoyé des données avec le formulaire
    if (!empty($_POST['pseudo']) AND ! empty($_POST['message'])) { // si les variables ne sont pas vides
        $pseudo = mysql_real_escape_string($_POST['pseudo']);
        $message = mysql_real_escape_string($_POST['message']); // on sécurise nos données
        // puis on entre les données en base de données :
        $insertion = $bdd->prepare('INSERT INTO messages VALUES("", :pseudo, :message)');
        $insertion->execute(array(
            'pseudo' => $pseudo,
            'message' => $message
        ));
    } else {
        echo "Vous avez oublié de remplir un des champs !";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Le tchat en AJAX !</title>
    </head>
    <body>
        <div id="messages">
            <!-- les messages du tchat -->
        </div>
        <form method="POST" action="traitement.php">
            Pseudo : <input type="text" name="pseudo" id="pseudo" /><br />
            Message : <textarea name="message" id="message"></textarea><br />
            <input type="submit" name="submit" value="Envoyez votre message !" id="envoi" />
        </form>
    </body>
</html>