<?php
// OOP-6.php
// Author: Dylan van Schouwen
class Fruit {
    public $name;
    private $price;
    public $category;
    public $currency;

    public function __construct($name, $price, $category, $currency) {
        $this->name = ucfirst($name);
        $this->setPrice($price);
        $this->setCategory($category);
        $this->currency = $currency;
    }

    public function setPrice($newPrice) {
        if ($newPrice < 0) {
            throw new Exception("Prijs kan niet negatief zijn.");
        }
        $this->price = $newPrice;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setCategory($newCategory) {
        $this->category = strtoupper($newCategory);
    }

    public function formatPrice() {
        return $this->currency . " " . number_format($this->getPrice(), 2);
    }
}

// Voorbeelden
$apple = new Fruit("apple", 0.75, "fruit", "€");
echo $apple->name . "<br>";
echo "Prijs: " . $apple->formatPrice() . "<br>";
echo "Categorie: " . $apple->category . "<br>";
echo "Currency: " . $apple->currency . "<br><br>";

// $banana = new Fruit("Banana", 1.25, "fruit", "€");
// echo $banana->name . "<br>";
// echo "Prijs: " . $banana->formatPrice() . "<br>";
// echo "Categorie: " . $banana->category . "<br>";
// echo "Valuta: " . $banana->currency . "<br>";
?>