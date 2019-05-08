<?php
require("randlib.php");
$min = $_GET["min"];
$max = $_GET["max"];
echo "Votre Nombre A Ete Generer ::: ".srcrand($min,$max);
echo "<br/><a href=''>Relancer</a>";
