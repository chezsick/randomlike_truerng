<?php
require("randlib.php");
$len = $_GET["len"];
$s = 0;
echo "La Balle Dans La Planche De Galton A Tombé :::::: ";
for ($n = 0;$n < $len;$n++)
{
$b = srcrand8bit() % 2;
if (boolval($b)){$s = $s + 1;}else{$s = $s - 1;}
echo $b;
}
echo " => Position ".$s;
echo "<br/><a href=''>Relancer</a>";
