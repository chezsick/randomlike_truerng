<?php
set_time_limit(0);
require("randlib.php");
$limit_frame = 999999; // Define The Limite Frame
header("Content-Type:text/plain");
$begin = $_GET["begin"];
$end = $_GET["end"];
$frame = $_GET["frame"];
if ($frame > $limit_frame)
{
echo "C'est Limité à ".$limit_frame." Désoler Mais Ne Gaspiller Pas Non Plus";
exit(1);
}
for ($n = 0;$n < $frame;$n++)
{
$a = srcrand(1,16777217);
echo $a.";".$begin.";".$end."\n";
}
