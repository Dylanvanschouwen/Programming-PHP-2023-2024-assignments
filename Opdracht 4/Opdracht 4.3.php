<?php
// Opdracht 4.3.php
// Author = Dylan van Schouwen
$variabele1 = 10;
$variabele2 = 15;

if ($variabele1 > $variabele2){
    $grootsteWaarde = $variabele1;
} else {
    $grootsteWaarde = $variabele2;
}

$uitkomst = $grootsteWaarde;
echo "uitkomst = $uitkomst <br>";

$berekening = $grootsteWaarde * 2 + $variabele1;
echo "de berekening = $berekening";
?>
