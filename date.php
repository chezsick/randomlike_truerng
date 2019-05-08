<?php
require("randlib.php");
require("datelib.php");
$future = $_GET["future"];
$getfut = srcrand(1,$future + 1);
echo "Votre Rendez-Vous A Ete Generer :::::::: ". getdatebt(intval((time() - 986767200) / 86400) + $getfut);
echo "<br/><a href=''>Relancer</a>";