<?php
echo "<style>@font-face{font-family:naf;src:url('naf.ttf');}</style>";
require("randlib.php");
$plus = boolval($_GET["plus"]);
$len = $_GET["len"];
echo "Votre Partition A Ete Générer ::::::: ";
if ($plus)
{
$note = "1234567890 ";
}
else
{
$note = "134578 ";
}
$l = strlen($note);
echo "<font face='naf' size='7'>";
for ($n = 0;$n < $len;$n++)
{
$o = srcrand(0,$l);
echo $note[$o];
}
echo "</font>";
echo "<br/><a href=''>Relancer</a>";