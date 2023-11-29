<?php
// Opdracht 4.2.php
// Author = Dylan van Schouwen
date_default_timezone_set('Europe/Amsterdam'); 

$uur = date('G'); 
$min = date('i');

$dagdeel = match (true) {
    ($uur >= 6 && $uur < 12) => "ochtend",
    ($uur >= 12 && $uur < 18) => "middag",
    ($uur >= 18 && $uur < 24) => "avond",
    default => "nacht",
};

echo "Op dit moment is het $dagdeel. <br>";
echo "het is nu $uur:$min";
?>
