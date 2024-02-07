<!DOCTYPE html>
<!-- 
    Opdracht 8.1 
    Author = Dylan van Schouwen 
-->
<html>
<head>
</head>
<body>
    <H1>Opdracht 8.1</H1>
    <form action="" method="post">
        <label for="newNumber">C ijfer:</label>
        <input type="text" id="newNumber" name="newNumber">
        <input type="submit" name="submit" value="Toevoegen">
    </form>
    <p>Gemiddelde: <?php echo $average?></p>
    <p>Aantal ingevoerde cijfers: <?php echo $count ?></p>

    <?php
session_start();

if (!isset($_SESSION['numbers'])) {
    $_SESSION['numbers'] = array();
}
if (isset($_POST['submit'])) {
    $newNumber = $_POST['newNumber'];
    if (is_numeric($newNumber)) {
        $_SESSION['numbers'][] = $newNumber;
    }
}
if (count($_SESSION['numbers']) > 0){
    $sum = array_sum($_SESSION['numbers']);
    $average = $sum / count($_SESSION['numbers']);
    $count = count($_SESSION['numbers']);
} else {
    $average = "";
    $count = 0;
}
?>
</body>
</html>

