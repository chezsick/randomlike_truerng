<?php
set_time_limit(0);
require("randlib.php");
header("Content-Type:text/plain");
$demi = boolval($_GET["demi"]);
$tp = $_GET["tp"];
$frame = $_GET["frame"];
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
