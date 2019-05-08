<?php
function getdatebt($day)
{
$jour = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samdi","Dimance"];
$sem = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samdi","Dimance"];
return intval($day / 49) + 1 . " Foitierre, " .$sem[intval(($day % 49) / 7)] .", ". $jour[$day % 7];
}