<?php
session_start();
?>
<p>Re-bonjour !</p>
<p>Je me souviens de toi ! Tu t'appelles 
    <?php echo $_POST['prenom'] . ' ' . $_POST['nom']; ?> !<br />