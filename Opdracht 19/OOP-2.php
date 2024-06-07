<?php
// OOP-2.php
// Author: Dylan van Schouwen
class Product {
    public $naam;
    public $smaak;
    public $suikergehalte;
}

$frisdrankA = new Product();
$frisdrankA->naam = "Fris A";
$frisdrankA->smaak = "Citroen";
$frisdrankA->suikergehalte = 10;

$frisdrankB = new Product();
$frisdrankB->naam = "Fris B";
$frisdrankB->smaak = "Cola";
$frisdrankB->suikergehalte = 15;

// Toon de properties
echo $frisdrankA->naam . "<br>";
echo $frisdrankA->smaak . "<br>";
echo $frisdrankA->suikergehalte . "<br> <br>";

echo $frisdrankB->naam . "<br>";
echo $frisdrankB->smaak . "<br>";
echo $frisdrankB->suikergehalte . "<br> <br>";


// Verander een property
$frisdrankB->suikergehalte = 12;

// Toon de gewijzigde property
echo "Het nieuwe suikerpercentage van $frisdrankB->naam is: " . $frisdrankB->suikergehalte;
?>