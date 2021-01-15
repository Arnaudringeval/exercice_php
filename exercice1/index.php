<?php
$animals = array("chien", "chat", "canard", "vache", "cochon");
sort($animals);
foreach ($animals as $key => $val) {
    echo "animals[" . $key . "] = " . $val . "\n";
}

?>