<?php 
// Opdracht 4.1.php
// Author = Dylan van Schouwen
    date_default_timezone_set ("Europe/Amsterdam");
    $uur = date('G');
    $min = date('i');

    if ($uur >= 6 && $uur < 12) {
        $dagdeel = "ochtend";
    } elseif ($uur >= 12 && $uur < 18) {
        $dagdeel = "middag";
    } elseif ($uur >= 18 && $uur < 24) {
        $dagdeel = "avond";
    } else {
        $dagdeel = "nacht";
    }
    echo "het is nu $dagdeel <br>";
    echo "het is nu $uur:$min";
?>