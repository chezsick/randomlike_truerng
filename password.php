<?php
require("randlib.php");
$len = $_GET["len"];
echo "Votre Mot De Passe A Ete Generer ::::::: ";
for($i = 0;$i < $len;$i++)
{
echo chr(srcrand(33,127));
}
echo "<br/><a href=''>Relancer</a>";