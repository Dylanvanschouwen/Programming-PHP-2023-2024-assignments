<!DOCTYPE html>
<!-- 
    Opdracht 8.3 
    Author = Dylan van Schouwen 
-->
<html>
<head>
</head>
<body>
    <H1>Opdracht 8.3</H1>
    <form action="" method="post">
        <label for="Fruitsoort">Fruitsoort: </label>
        <input type="text" id="Fruitsoort" name="Fruitsoort"><br><br>
        <input type="submit" name="submit" value="Toevoegen"><br><br><br>
        <input type="submit" name="submit" value="Sorteren">
        <input type="submit" name="submit" value="Schudden"><br><br>
    </form>
    <br><br><br>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION["soorten"])) {
    $_SESSION["soorten"] = array();
}
if (isset($_POST)) {
    $soort = $_POST["Fruitsoort"];
    $action = $_POST["submit"];
    switch ($action) {
        case "Toevoegen":
            if (!empty($soort)) {
                $_SESSION["soorten"][] = $soort;
            }
            break;
        case "Schudden":
            shuffle($_SESSION["soorten"]);
            break;
        case "Sorteren":
            sort($_SESSION["soorten"]);
            break;
        default:
            break;
    }
}
for ($i=0; $i < count($_SESSION["soorten"]); $i++) { 
    echo($_SESSION["soorten"][$i] . "<br>");  
}
?>