<?php
require("randlib.php");
$wordlistpath = "listfr.txt";
$nb = $_GET["nb"];
$wordfile = file_get_contents($wordlistpath);
$wordlistarray = explode("\n",$wordfile);
$nbword = count($wordlistarray);
echo "Votre Texte à Eté Generer ::::::::: ";
for ($n = 0;$n < $nb;$n++)
{
echo $wordlistarray[srcrand(0,$nbword)] . " ";
}
echo "<br/><a href=''>Relancer</a>";