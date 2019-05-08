<?php
set_time_limit(0);
require("randlib.php");
header("Content-Type:text/plain");
$nbedge = $_GET["nbedge"];
$maxnode = $_GET["maxnode"];
for ($n = 0;$n < $nbedge;$n++)
{
$a = srcrand(0,$maxnode);
$b = srcrand(0,$maxnode);
echo $a." ".$b."\n";
}
