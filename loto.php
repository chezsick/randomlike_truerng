<?php
require("randlib.php");
$nbball = $_GET["nbball"];
$tirage = $_GET["tirage"];
$balls = range(0,$nbball);
echo "Votre Tirage Du Loto A Eté Générer ::::::: ";
for ($g = 0;$g < $tirage;$g++)
{
$tired = srcrand(1,$nbball + 1);echo $balls[$tired]." ";
array_splice($balls,$tired,1);$nbball = $nbball - 1;
}
echo "<br/><a href=''>Relancer</a>";