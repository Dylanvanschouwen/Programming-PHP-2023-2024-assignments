<!DOCTYPE html>
<!-- 
    Opdracht 7.1 
    Author = Dylan van Schouwen 
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 7.1</title>
</head>
<body>
<form action="" method="post">
    <label for="getal">Bedrag exclusief BTW</label>
    <input type="number" name="getal" placeholder="Vul een getal in..." required>
    <br>
    <input type="radio" name="percent" id="Laag" value="9" checked="checked">
    <label for="Laag">Laag, 9%</label>
    <br>
    <input type="radio" name="percent" id="Hoog" value="21">
    <label for="Hoog">Hoog, 21%</label>
    <br>
    <input type="submit" value="Uitrekenen">
</form>
</body>
</html>

<?php

if (isset($_POST['getal'])) {
    $bedrag = $_POST['getal'];
    $procent = $_POST['percent'];

    $resultaat = number_format($bedrag * (1 + $procent / 100), 2, ",", ".");
    echo("Bedrag inclusief $procent% BTW: €" . $resultaat);
}

?>