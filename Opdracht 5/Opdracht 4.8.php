<?php 
// Opdracht 4.8.php
// Author = Dylan van Schouwen

$ages = [12, 17, 21];
$scooterrijbewijs = 16;
$stemrecht = 18;

foreach ($ages as $age) {
    if ($age >= $scooterrijbewijs) {
        echo "Je bent $age, je mag je scooterrijbewijs halen. <br>";
    } elseif ($age < $scooterrijbewijs) {
        echo "Je bent $age, je moet nog even wachten totdat je je scooterrijbewijs mag halen. <br>";
    }
}

$stempasOntvangen = false; 

echo "<br>";

foreach ($ages as $age) {
    if ($age >= $stemrecht) {
        if ($stempasOntvangen) {
            echo "Je bent $age, je mag stemmen! <br>";
        } else {
            echo "Je bent $age, je mag niet stemmen omdat je de stempas nog niet hebt ontvangen. <br>";
        }
    } elseif ($age < $stemrecht) {
        echo "Je bent $age, je moet nog even wachten totdat je mag gaan stemmen. <br>";
    }
}
?>
