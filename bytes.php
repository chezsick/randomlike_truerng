<?php
set_time_limit(0);
require("randlib.php");
$len = $_GET["len"];
$binary = $_GET["binary"];
header("Content-Type:text/plain");
$len_limit = 999999; // define the limit
if ($len > $len_limit)
{
echo "C'est Limité à ".$len_limit." Désoler Mais Ne Gaspiller Pas Non Plus";
exit(1);
}
for ($n = 0;$n < $len;$n++)
{
if ($binary)
{
echo sprintf("%08d",decbin(srcrand8bit()));
}
else
{
echo chr(srcrand8bit());
}
}
