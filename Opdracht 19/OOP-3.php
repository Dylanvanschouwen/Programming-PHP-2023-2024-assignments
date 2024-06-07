<?php
// OOP-3.php
// Author: Dylan van Schouwen
class Product {
    public $naam;
    public $smaak;
    public $suikergehalte;
    private $prijs;

    public function __construct($naam, $smaak, $suikergehalte, $prijs) {
        $this->naam = $naam;
        $this->smaak = $smaak;
        $this->suikergehalte = $suikergehalte;
        $this->prijs = $prijs;
    }

    public function formatPrice() {
        return number_format($this->prijs, 2);
    }
}

$frisdrankA = new Product("Fris A", "Citroen", 10, 1.25);
$frisdrankB = new Product("Fris B", "Cola", 15, 1.50);
$frisdrankC = new Product("Fris C", "Fanta", 15, 1.50);
$frisdrankD = new Product("Fris D", "Sprite", 15, 1.50);

// Toon de properties
echo $frisdrankA->naam . "<br>";
echo $frisdrankA->smaak . "<br>";
echo $frisdrankA->suikergehalte . "<br>";
echo "Prijs: " . $frisdrankA->formatPrice() . "<br><br>";

echo $frisdrankB->naam . "<br>";
echo $frisdrankB->smaak . "<br>";
echo $frisdrankB->suikergehalte . "<br>";
echo "Prijs: " . $frisdrankB->formatPrice() . "<br><br>";

echo $frisdrankC->naam . "<br>";
echo $frisdrankC->smaak . "<br>";
echo $frisdrankC->suikergehalte . "<br>";
echo "Prijs: " . $frisdrankC->formatPrice() . "<br><br>";

echo $frisdrankD->naam . "<br>";
echo $frisdrankD->smaak . "<br>";
echo $frisdrankD->suikergehalte . "<br>";
echo "Prijs: " . $frisdrankD->formatPrice() . "<br><br>";

// Verander een property
$frisdrankB->suikergehalte = 12;

// Toon de gewijzigde property
echo "Het nieuwe suikerpercentage van $frisdrankB->naam is: " . $frisdrankB->suikergehalte . "<br>";
?>