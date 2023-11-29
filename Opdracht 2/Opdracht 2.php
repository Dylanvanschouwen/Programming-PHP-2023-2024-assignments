<?php
// Opdracht 2.php
// author: Dylan van Schouwen

// test 123
$test123 = "BOO";
echo "$test123";

//  Een voorbeeld van een echo en een print
echo "<h1>Hallo wereld,</h1>";
echo "Ik zit op het ";
// Voorbeeld van een variabele in PHP.
$schoolnaam = "Techniek College Rotterdam! <br> <br>";

// Met echo kun je iets op het scherm tonen.
echo "$schoolnaam";

date_default_timezone_set ("Europe/Amsterdam");
$today = date ("j F Y");
echo "vandaag is het: $today <br>";

$time = date("H:i");
echo "het is nu: $time uur <br>";

$month = date ("F");
$daysinmonth = date ("t");
echo "deze maand, $month heeft $daysinmonth dagen <br>";

$week = date ("W");
echo "deze week is het week: $week";

?>