<?php
require("randlib.php");
$r = srcrand8bit();
$g = srcrand8bit();
$b = srcrand8bit();
echo "Votre Couleur A Ete Generer :::: rgb(".$r.",".$g.",".$b.")<br/>";
echo "<svg width='500' height='500'><rect width='500' height='500' style='fill:rgb(".$r.",".$g.",".$b.");stroke-width:1;stroke:rgb(0,0,0)'/></svg>";
echo "<br/><a href=''>Relancer</a>";
