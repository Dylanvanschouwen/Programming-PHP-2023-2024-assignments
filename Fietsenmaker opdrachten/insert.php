<?php
//Author: Dylan van schouwen
// File name: insert.php
//Functie: insert data into the database
include "connect.php";

if(isset($_POST['save'])) {
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $prijs = $_POST['prijs'];

    $sql = "INSERT INTO fietsen(merk, type, prijs) VALUES (:merk, :type, :prijs)";
    $query = $conn->prepare($sql);
    $query->bindParam(":merk", $merk);
    $query->bindParam(":type", $type);
    $query->bindParam(":prijs", $prijs);

    if($query->execute()) {
        header("Location: Crud.php"); 
        exit(); 
    } else {
        echo "Er is een fout opgetreden: " . $query->errorInfo()[2];
    }
}
?>

<form method="post" action="">
    <label>Merk: </label>
    <input type="text" name="merk"><br>

    <label>Type: </label>
    <input type="text" name="type"><br>

    <label>Prijs: </label>
    <input type="text" name="prijs"><br>

    <input type="submit" name="save">
</form>
