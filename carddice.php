<?php
echo "<style>@font-face{font-family:carddice;src:url('carddice.ttf');}</style>";
require("randlib.php");
$card = $_GET["card"];
$dice = $_GET["dice"];
$joker = boolval($_GET["joker"]);
$cardcar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
$dicecar = "123456";
if ($joker)
{
$cardcar .= "?";
}
echo "Votre Jeu A Ete Générer ::::::::: ";
echo "<font face='carddice' size='7'>";
for ($n = 0;$n < $card;$n++)
{
$o = srcrand(0,strlen($cardcar));
echo $cardcar[$o];
}
for ($n = 0;$n < $dice;$n++)
{
$o = srcrand(0,strlen($dicecar));
echo $dicecar[$o];
}
echo "</font>";
