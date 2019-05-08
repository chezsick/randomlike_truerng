<?php
set_time_limit(0);
require("randlib.php");
$frame = $_GET["frame"];
$limit_frame = 999999;
header("Content-Type:text/plain");
if ($frame > $limit_frame)
{
echo "C'est Limité à ".$limit_frame." Désoler Mais Ne Gaspiller Pas Non Plus";
exit(1);
}
$cold_hot = floatval($_GET["cold_hot"]); // Negative = Cold = 0;Positive = Hot
$cloud_sun = floatval($_GET["cloud_sun"]); // Negative = Cloud;Positive = Sun
$cloud_rain = floatval($_GET["cloud_rain"]); // Negative = Cloud;Positive = Rain,Active If Cloud In sun_cloud Variable
$cloud_snow = floatval($_GET["cloud_snow"]); // Negative = Cloud;Positive = Snow,Active If Cloud In sun_cloud Variable And If Cold In cold_hot Variable
$cloud_storm = floatval($_GET["cloud_storm"]); // Negative = Cloud;Positive = Storme,Active If Cloud In sun_cloud Variable And If Hot In cold_hot Variable
$cloud_fog = floatval($_GET["cloud_fog"]); // Negative = Cloud;Positive = Fog,Active If Cloud In sun_cloud Variable And If Cold In cold_hot Variable
$wind = floatval($_GET["wind"]); // Negative = Passive, Positive = Active
$min = floatval($_GET["min"]);
$max = floatval($_GET["max"]);
for ($n = 0;$n < $frame;$n++)
{
echo $cold_hot.";".$cloud_sun.";".$cloud_rain.";".$cloud_snow.";".$cloud_storm.";".$cloud_fog.";".$wind."\n";
$cold_hot = $cold_hot+srcranduniform($min,$max);
$cloud_sun = $cloud_sun+srcranduniform($min,$max);
$cloud_rain = $cloud_rain+srcranduniform($min,$max);
$cloud_snow = $cloud_snow+srcranduniform($min,$max);
$cloud_storm = $cloud_storm+srcranduniform($min,$max);
$cloud_fog = $cloud_fog+srcranduniform($min,$max);
$wind = $wind+srcranduniform($min,$max);
}