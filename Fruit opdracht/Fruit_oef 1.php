<?php
    class Fruit {
        // properties
        public $name;
        public $color;
        public $datum;
        private $price;
    
        // methods
        public function showName(){
            echo "<br> de naam van het object: " . $this->name . "<br>";
            echo "<br> de kleur van het object: " . $this->color . "<br>";
            echo "<br> de datum van het object: " . $this->datum . "<br>";
            echo "<br> de prijs van het object: " . $this->price . "<br><br>";
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function getPrice(){
            return $this->price;
        }
    }

    // aanmaken object fruit
    $appel = new Fruit();
    $appel->name = "appel";
    $appel->color = "rood";
    $appel->datum = "25 Mei";
    $appel->setPrice(1.20);

    // print de prijs
    echo "De prijs is " . $appel->getPrice() . " euro"; 
    
    // var_dump ($appel)
    $appel->showName();

    //aanmaken 2e object fruit
    $banaan = new Fruit();
    $banaan->name = "banaan";
    $banaan->color = "geel";
    $banaan->datum = "29 Mei";
    $banaan->setPrice(1.50);

    // var_dump ($banaan)
    $banaan->showName();

    // aanmaken 3e object fruit
    $peer = new Fruit();
    $peer->name = "peer";
    $peer->color = "bruin";
    $peer->datum = "18 Mei";
    $peer->setPrice(0.90);

    // var_dump ($peer)
    $peer->showName();
