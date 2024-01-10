<!DOCTYPE html>
<!-- 
    Opdracht 7.2 
    Author = Dylan van Schouwen 
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 7.2</title>
</head>
<body>
<form action="" method="post">
    <label for="getal1">Getal 1</label>
    <input type="number" name="getal1" placeholder="Vul een getal in..." required><br>
    <label for="getal2">Getal 2</label>
    <input type="number" name="getal2" placeholder="Vul een getal in..." required><br>
    <input type="radio" name="modifier" id="Optellen" value="+" checked="checked">
    <label for="Optellen">Optellen</label>
    <input type="radio" name="modifier" id="Aftrekken" value="-" >
    <label for="Aftrekken">Aftrekken</label><br>
    <input type="radio" name="modifier" id="Vermenigvuldigen" value="x" >
    <label for="Vermenigvuldigen">Vermenigvuldigen</label>
    <input type="radio" name="modifier" id="Delen" value="/" >
    <label for="Delen">Delen</label><br>
    <input type="submit" value="Berekenen">
</form>
</body>
</html>
<?php
if (isset($_POST['getal1'])) {
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];
    $modifier = $_POST['modifier'];
    switch ($modifier) {
        case "+":
            $result = $getal1 + $getal2;
        break;
        case "-":
            $result = $getal1 - $getal2;            
        break;
        case "x":
            $result = $getal1 * $getal2;            
        break;
        case "/":
            $result = $getal1 / $getal2;
        break;

        default:
            $result = 0;
        break;
    }
    
    echo("<br>$getal1 $modifier $getal2 = $result");
}
?>