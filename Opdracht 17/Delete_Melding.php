<?php

include_once "functions.php";

// Check if Meldingid is set in the URL
if(isset($_GET['Meldingid']) && !empty($_GET['Meldingid'])){
    // Get Meldingid from the URL
    $Meldingid = $_GET['Meldingid'];
    
    // Delete the entry
    deleteMelding($Meldingid);
}

// Redirect back to the previous page after deletion
header("Location: Admin.php");
exit;

?>
