<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On crée quelques variables de session dans $_SESSION
$_POST = null;
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['nom'] = $_POST['nom'];
?>
<form method="post" action="index.php">
<p>
 <label for="nom">Nom : </label><input type="text" name="nom" />
</p>
<p>
 <label for="prenom">Prénom : </label><input type="text" name="prenom" />
</p>
<p>
 <input type="submit" value="Valider" />
</p>
</form>