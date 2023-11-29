<?php
// Opdracht 4.4.php
// Author = Dylan van Schouwen
$prices = [160, 22, 75, 100, 1, 200];

foreach ($prices as $price) {
    echo "Oude prijs: $price ";

    if ($price > 150) {
        $newPrice = $price + $price * 0.19;
    } elseif ($price < 55) {
        $newPrice = $price + $price * 0.11;
    } elseif ($price >= 55 && $price <= 150) {
        $newPrice = $price + $price * 0.16;
    }

    echo "Nieuwe prijs: $newPrice <br>";
}

?>
