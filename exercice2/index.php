<?php
$animals = array("chien", "chat", "canard", "vache", "cochon");
sort($animals);
foreach ($animals as $key => $val) {
    echo "animals[" . $key . "] = " . $val . "\n";
}
{echo "<br></br>__________________<br></br>";}
{unset($key['3']);
    echo "animals[" . $key . "] = " . $val . "\n";
}
?>