<?php
// OOP-5.php
// Author: Dylan van Schouwen
class Fruit {
    public $name;
    private $price;
    public $category;

    public function __construct($name, $price, $category) {
        $this->name = ucfirst($name);
        $this->setPrice($price);
        $this->setCategory($category);
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
        return number_format($this->getPrice(), 2);
    }
}

$apple = new Fruit("apple", 0.75, "fruit");
echo $apple->name . "<br>";
echo "Prijs: " . $apple->formatPrice() . "<br>";
echo "Categorie: " . $apple->category . "<br><br>";

$banana = new Fruit("Banana", 1.25, "fruit");
echo $banana->name . "<br>";
echo "Prijs: " . $banana->formatPrice() . "<br>";
echo "Categorie: " . $banana->category . "<br>";
?>