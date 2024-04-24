<?php

include_once "config.php";

function connectDb(){
    $servername = SERVERNAME;
    $username = USERNAME;
    $password = PASSWORD;
    $dbname = DATABASE;
   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //echo "Connected successfully";
        return $conn;
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

 }
// Haal alle meldingen uit de database op.
function getData($table){
    $conn = connectDb();

    $sql = "SELECT * FROM $table";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();

    return $result;
 }
// CRUD meldingen voor admins.
function crudmeldingen_Admin(){

    $txt_Admin = "
    <h1>Crud Meldingen voor Admins</h1>
    <nav>
        <button>
		    <a href='Add_melding.php'>Toevoegen nieuwe melding</a>
        </button>
    </nav><br>";
    echo $txt_Admin;
 
    $result = getData(CRUD_TABLE);

    printCrudmeldingen_Admin($result);
    
 }
 //CRUD meldingen voor leerlingen.
  function Crudmeldingen_Leerling(){
    $txt_Leerlingen = "
    <h1>Crud Meldingen voor Studenten</h1>";
    echo $txt_Leerlingen;

        $result = getData(CRUD_TABLE);

        printCrudmeldingen_Leerlingen($result);
 }
 // Print de tabel voor admins.
 function printCrudmeldingen_Admin($result){

    $table = "<table>";

    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th>" . $header . "</th>";   
    }

    $table .= "<th colspan=2>Actie</th>";
    $table .= "</th>";

    foreach ($result as $row) {
        
        $table .= "<tr>";

        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";  
        }
        $table .= "<td>
            <form method='post' action='Delete_Melding.php?Meldingid=$row[Meldingid]' >       
                <button>Verwijder</button>	 
            </form></td>";

        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}



// Print de tabel voor de leerlingen.
 Function printCrudmeldingen_Leerlingen($result){
    $table = "<table>";

    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th>" . $header . "</th>";   
    }
    foreach ($result as $row) {
        
        $table .= "<tr>";
    
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";  
        }
    }
    $table.= "</table>";

    echo $table;
 }
 // verwijderd de gekozen melding
function deleteMelding($Meldingid){
    $conn = connectDb();
    try {
        $stmt = $conn->prepare("DELETE FROM Meldingen WHERE Meldingid = :Meldingid");
        $stmt->bindParam(':Meldingid', $Meldingid);
        $stmt->execute();
        echo "Melding verwijderd";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
// Nieuwe melding toevoegen.
function addMelding($Naam, $Datum, $Reden){
    $conn = connectDb();
    try {
        $stmt = $conn->prepare("INSERT INTO Meldingen (Naam, Datum, Reden) VALUES (:Naam, :Datum, :Reden)");
        $stmt->bindParam(':Naam', $Naam);
        $stmt->bindParam('Datum', $Datum);
        $stmt->bindParam(':Reden', $Reden);
        $stmt->execute();
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>