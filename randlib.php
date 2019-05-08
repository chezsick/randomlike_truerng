<?php
$t = fopen("/dev/TrueRNG","rb");
function srcrand($min,$max)
{
global $t;
$out = 0;
$out = (pow(256,2)*ord(fgetc($t)))+(pow(256,1)*ord(fgetc($t)))+(pow(256,0)*ord(fgetc($t)));
return intval((($out/16777216)*($max-$min))+$min);
}
function srcrand8bit()
{
global $t;
$out = ord(fgetc($t));
return $out;
}
function srcranduniform($min,$max)
{
global $t;
$out = 0;
$out = (pow(256,2)*ord(fgetc($t)))+(pow(256,1)*ord(fgetc($t)))+(pow(256,0)*ord(fgetc($t)));
return (($out/16777216)*($max-$min))+$min;
}
