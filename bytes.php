<?php
set_time_limit(0);
require("randlib.php");
$len = $_GET["len"];
$binary = $_GET["binary"];
header("Content-Type:text/plain");
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
