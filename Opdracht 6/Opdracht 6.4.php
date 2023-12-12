<?php
// Opdracht 6.4
// Author: Dylan van Schouwen

function berekenOmtrekCirkel($straal) {
    $omtrek = 2 * M_PI * $straal;
    return round($omtrek, 1);
}
function berekenOppervlakteCirkel($straal) {
    $oppervlakte = M_PI * pow($straal, 2);
    return round($oppervlakte, 1);
}
function printCirkelGegevens($straal) {
    $omtrekResultaat = berekenOmtrekCirkel($straal);
    $oppervlakteResultaat = berekenOppervlakteCirkel($straal);

    echo "De straal van de cirkel is: $straal <br>";
    echo "Omtrek: $omtrekResultaat <br>";
    echo "Oppervlakte: $oppervlakteResultaat <br>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["straal"])) {
        $straal = floatval($_POST["straal"]);
        printCirkelGegevens($straal);
    } else {
        echo "Vul alstublieft de straal in.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cirkel Berekening</title>
</head>
<body>
    <h1>Berekeningen voor een cirkel</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="straal">Vul de straal in:</label>
        <input type="number" step="0.1" name="straal" required>
        <button type="submit">Bereken</button>
    </form>
</body>
</html>

