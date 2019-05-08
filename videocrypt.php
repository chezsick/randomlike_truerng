<?php
set_time_limit(0);
require("randlib.php");
header("Content-Type:text/plain");
$begin = $_GET["begin"];
$end = $_GET["end"];
$frame = $_GET["frame"];
for ($n = 0;$n < $frame;$n++)
{
$a = srcrand(1,16777217);
echo $a.";".$begin.";".$end."\n";
}
