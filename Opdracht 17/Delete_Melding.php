<?php
// auteur: Dylan
// functie: verwijder een melding
include_once "functions.php";

if(isset($_GET['Meldingid']) && !empty($_GET['Meldingid'])){

    $Meldingid = $_GET['Meldingid'];
    
    deleteMelding($Meldingid);
}

header("Location: Admin.php");
exit;

?>
