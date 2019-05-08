<?php
set_time_limit(0);
require("randlib.php");
$maxedges = 999999; // Define The Limite Frame
header("Content-Type:text/plain");
$nbedge = $_GET["nbedge"];
$maxnode = $_GET["maxnode"];
if ($nbedge > $maxedges)
{
echo "C'est Limité à ".$maxedges." Désoler Mais Ne Gaspiller Pas Non Plus";
exit(1);
}
for ($n = 0;$n < $nbedge;$n++)
{
$a = srcrand(0,$maxnode);
$b = srcrand(0,$maxnode);
echo $a." ".$b."\n";
}
