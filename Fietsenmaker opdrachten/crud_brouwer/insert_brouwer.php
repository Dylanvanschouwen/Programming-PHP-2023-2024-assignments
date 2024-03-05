<?php
    // functie: formulier en database insert brouwer
    // auteur: Dylan van Schouwen

    echo "<h1>Insert Brouwer</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertBrouwer($_POST) == true){
            echo "<script>alert('Brouwer is toegevoegd')</script>";
        } else {
            echo '<script>alert("Brouwer is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="land">Land:</label>
        <input type="text" id="land" name="land" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='crud_brouwer.php'>Home</a>
    </body>
</html>
