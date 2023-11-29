<?php
// Opdracht 4.7.php
// Author = Dylan van Schouwen

function koopiPhone($spaargeld) {
    $iphoneKosten = 1000; 
    $tekort = $iphoneKosten - $spaargeld;

    if ($spaargeld >= $iphoneKosten) {
        $over = $spaargeld - $iphoneKosten;
        return "Je hebt $spaargeld en de Iphone kost $iphoneKosten. <br> Gefeliciteerd! Je kunt de iPhone kopen. Je hebt nog €$over over voor extra's.";
    } elseif ($tekort > 250) {
        return "Je hebt $spaargeld en de Iphone kost $iphoneKosten. <br> Helaas, je hebt meer dan €250 tekort om de iPhone te kopen. Misschien is het tijd om een baantje te zoeken. Tekort: €$tekort.";
    } else {
        return "Je hebt $spaargeld en de Iphone kost $iphoneKosten. <br> Bijna gelukt! Je hebt nog €$tekort nodig om de iPhone te kopen. Spaar nog wat bij en je bent er.";
    }
}
$spaargeld = [800, 1000, 2000, 100, 150, 600, 750, 950];

foreach ($spaargeld as $bedrag){
$resultaat = koopiPhone($bedrag);
echo "$resultaat <br> <br>";
}
?>