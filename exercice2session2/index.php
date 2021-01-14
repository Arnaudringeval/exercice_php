<?php
session_start();
?>
<p>
 Salut <?php echo $_POST['prenom'] . ' ' . $_POST['nom']; ?> !<br />
 Tu es à l'accueil de mon site. Tu veux aller sur une autre page ?
 </p>
<a href="page1.php">page 1</a>