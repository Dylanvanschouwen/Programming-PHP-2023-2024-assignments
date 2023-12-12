<?php
// Opdracht 6.3
// Auteur: Dylan van Schouwen

$min = 1000;
$max = 9999;

$postcode = rand($min, $max);
$postcode = strval($postcode) . " " . chr(rand(65, 90)) . chr(rand(65, 90));

echo "Random postcode --> $postcode";
?>