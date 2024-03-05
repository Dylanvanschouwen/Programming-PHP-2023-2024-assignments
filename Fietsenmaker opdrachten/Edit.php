<?php
//Author: Dylan van Schouwen
//File name: Edit.php
//Function: Edit data and update it
include "connect.php";

if(isset($_POST['save'])) {
    $merk = filter_input(INPUT_POST, "merk", FILTER_SANITIZE_STRING);
    $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING);
    $prijs = filter_input(INPUT_POST, "prijs", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $sql = "UPDATE fietsen SET merk = :merk, type = :type, prijs = :prijs WHERE Id = :Id";
    $query = $conn->prepare($sql);
    $query->bindParam(":merk", $merk);
    $query->bindParam(":type", $type);
    $query->bindParam(":prijs", $prijs);
    $query->bindParam(":Id", $_GET['Id']);

    if($query->execute()) {
        header("Location: crud.php");
        exit(); 
    } else {
        echo "Er is een fout opgetreden!";
    }
    echo "<br>";
} else {
    $sql = "SELECT * FROM fietsen WHERE Id = :Id";
    $query = $conn->prepare($sql);
    $query->bindParam(":Id", $_GET['Id']);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as &$data) {
        $merk = $data["merk"];
        $type = $data["type"];
        $prijs = $data["prijs"];
    }
}
?>

<form method="post" action="">
    <label>Merk: </label>
    <input type="text" name="merk" value="<?php echo $merk; ?>"><br>
    <label>Type: </label>
    <input type="text" name="type" value="<?php echo $type; ?>"><br>
    <label>Prijs: </label>
    <input type="text" name="prijs" value="<?php echo $prijs; ?>"><br>
    <input type="submit" name="save" value="Opslaan">
</form>
