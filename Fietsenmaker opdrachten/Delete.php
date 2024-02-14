<?php
//Author: Dylan van Schouwen
// File name: Delete.php
//Functie: Delete data from the database
include 'connect.php';
echo "<br>";

if (isset($_GET['Id'])) {
    $sql = "DELETE FROM fietsen WHERE Id = :Id";
    $query = $conn->prepare($sql);
    $Id = filter_input(INPUT_GET, "Id", FILTER_SANITIZE_NUMBER_INT);
    $query->bindParam(":Id", $Id);
    if($query->execute()) {
        header("location: Crud.php");
    } else {
        echo "An error occurred!";
    }
}

?>