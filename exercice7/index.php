<?php
for($i=1; $i <= 10; $i++)
{
    Echo '<br/>Table de multiplication de '.$i."<br/><br/>";
    for ($j=1; $j <= 10; $j++){
        echo $i.' x '.$j.' = '.$i*$j."<br/>";
    }
}

?>

<?php
echo "<table border='1' style='border-collapse: collapse'>";
for($row=1; $row <= 10; $row++){
    echo "<tr> \n";
    for($col=1; $col <= 10; $col++){
        $calcul = $row * $col;
        echo "<td>$calcul</td> \n";
    }
    echo "</tr> \n";
}
echo "</table>";

?>