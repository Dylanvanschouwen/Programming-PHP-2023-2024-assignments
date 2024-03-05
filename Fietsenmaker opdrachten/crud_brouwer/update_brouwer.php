<?php
    // functie: update brouwer
    // auteur: Dylan van Schouwen

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updateBrouwer($_POST) == true){
            echo "<script>alert('Brouwer is gewijzigd')</script>";
        } else {
            echo '<script>alert("Brouwer is NIET gewijzigd")</script>';
        }
    }

    // Test of brouwcode is meegegeven in de URL
    if(isset($_GET['brouwcode'])){  
        // Haal alle info van de betreffende brouwcode $_GET['brouwcode']
        $brouwcode = $_GET['brouwcode'];
        $row = getBrouwer($brouwcode);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig Brouwer</title>
</head>
<body>
  <h2>Wijzig Brouwer</h2>
  <form method="post">
    <input type="hidden" id="brouwcode" name="brouwcode" value="<?php echo $row['brouwcode']; ?>">
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="land">Land:</label>
    <input type="text" id="land" name="land" required value="<?php echo $row['land']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_brouwer.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen brouwcode opgegeven<br>";
    }
?>