<?php
// Author: Dylan
// Functie: Voeg melding toe
include_once "functions.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Naam = $_POST['Naam'];
    $datum = $_POST['Datum'];
    $Reden = $_POST['Reden'];
    
    addMelding($Naam, $datum, $Reden);

    header("Location: Admin.php");
    exit; 
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melding toevoegen</title>
</head>
<body>
    <h1>Voeg melding toe</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Naam:</label><br>
        <input type="text" name="Naam"><br>
        <label>Datum:</label><br>
        <input type="date" name="Datum"><br>
        <label>Reden:</label><br>
        <input type="text" name="Reden"><br><br>
        <button type="submit">Add Melding</button>
    </form>
</body>
</html>
