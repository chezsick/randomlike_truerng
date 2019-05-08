<?php
set_time_limit(0);
require("randlib.php");
$limit_frame = 999999; // Define The Limite Frame
header("Content-Type:text/plain");
$demi = boolval($_GET["demi"]);
$tp = $_GET["tp"];
$frame = $_GET["frame"];
if ($frame > $limit_frame)
{
echo "C'est Limité à ".$limit_frame." Désoler Mais Ne Gaspiller Pas Non Plus";
exit(1);
}
for ($n = 1;$n <= $frame;$n++)
{
$offset1 = srcrand8bit();
$increment1 = (intval(srcrand8bit()/2)*2)+1;
if ($demi)
{
$offset2 = srcrand8bit();
$increment2 = (intval(srcrand8bit()/2)*2)+1;
}
else
{
$offset2 = $offset1;
$increment2 = $increment1;
}
echo "frame ".$n.";".$tp.";".$offset1.";".$increment1.";".$offset2.";".$increment2."\n";
}