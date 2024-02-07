<?php
//Auteur: Dylan van Schouwen
//Functie: Toevoegen van 1 fiets
    // Test of toevoeg knop is gedrukt
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        // Maak variabelen aan voor alle velden
        Echo "er is gepost";
        print_r($_POST);
    }
    //connect database
    include "connect.php";

    //maak een query 
    $sql = "INSERT INTO fietsen (merk, type, prijs, foto) 
            VALUES (:merk, :type, :prijs, :foto)";
    //prepare query
    $query = $conn->prepare($sql);
    //uitvoeren
    $query->execute(
        [
            'merk' => $_POST['merk'],
            'type' => $_POST['type'],
            'prijs' => $_POST['prijs'],
            'foto' => $_POST['foto']
        ]

    );

    //test of insert gelukt is
    if ($query) {
        echo "insert gelukt";
    } else {
        echo "insert mislukt";
    }
    

    //ga naar home-page

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>insert php</title>
    </head>
    <body>
        <h2> voeg fiets toe </h2>
        <form action="" method="post">
                   <!-- Merk -->
        <label for="merk">Merk:</label>
        <input type="text" name="merk" required maxlength="255">
        <br>

        <!-- Type -->
        <label for="type">Type:</label>
        <input type="text" name="type" required maxlength="255">
        <br>

        <!-- Prijs -->
        <label for="prijs">Prijs:</label>
        <input type="number" name="prijs" required min="0" max="99999">
        <br>

        <!-- Verzendknop -->
        <input type="submit" value="Voeg toe aan database">    

    </body>
    </html>