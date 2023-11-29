<?php
// Opdracht 4.5.php
// Author = Dylan van Schouwen

function checkEvenOrOdd($number) {
    if ($number % 2 == 0) {
        echo "$number is even. <br>";
    } else {
        echo "$number is odd. <br>";
    }
}
    
    $numbers= [160, 22, 75, 100, 1, 205];
    foreach ($numbers as $number){
    checkEvenOrOdd ($number);
    }
?>