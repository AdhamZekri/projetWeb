<?php
include 'utils.inc.php';

start_page('titre');
?>

<?php
echo '
    <form action="data-processing.php" method="post">
        <label for="id">Identifiant:</label><br>
        <input type="text" id="id" name="id"/><br>
        <label for="mail">E-mail</label><br>
        <input type="text" id="mail" name="mail"/><br>
        <label for="pass">Mot de passe</label><br>
        <input type="password" id="pass" name="pass"/><br>
        <input type="submit" value="Connexion" name="action" id="action" />
    </form>';
?>

<?php
end_page();
?>