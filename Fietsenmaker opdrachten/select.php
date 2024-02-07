<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select database</title>
</head>
<body>

</body>
</html>
<?php

//auteur: Dylan van Schouwen
//functie: select data

// connect database
    include "connect.php";

    // Auteur: Dylan van Schouwen
    // Functie: Selecteer data

    // Connect database
    include "connect.php";

    // Maak een query
    $sql = "SELECT * FROM fietsen";
    // Prepare
    $stmt = $conn->prepare($sql);
    // Uitvoeren
    $stmt->execute();
    // Ophalen alle data
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //print data rij voor rij
    foreach ($result as $row) {
        echo $row['merk'] . $row['type'] . $row['prijs'] . $row['foto'] . "<br>";
    }

    // print de header van de tabel
    echo "<table>";
    echo "<tr>";
        echo "<th>Merk</th>";
        echo "<th>Type</th>";
        echo "<th>Prijs</th>";
        echo "<th>Foto</th>";
    echo "</tr>";

    // Print de data rij voor rij
    foreach ($result as $row) {
        echo "<tr>";
            echo "<td>" . $row['merk'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['prijs'] . "</td>";
            echo "<td>" . $row['foto'] . "</td>";
        echo "</tr>";
        
    }
    
?>