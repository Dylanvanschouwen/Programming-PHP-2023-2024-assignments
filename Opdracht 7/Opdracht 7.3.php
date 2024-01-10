<!DOCTYPE html>
<!-- 
    Opdracht 7.3
    Author = Dylan van Schouwen
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 7.3</title>
</head>
<body>
<H1>Opdracht 7.3</H1>
<form action="" method="post">
    <input type="radio" name="colour" id="red" value="red" checked="checked">
    <label for="Optellen">Red</label>
    <input type="radio" name="colour" id="green" value="green" >
    <label for="Aftrekken">Green</label>
    <input type="radio" name="colour" id="blue" value="blue" >
    <label for="Vermenigvuldigen">Blue</label>
    <input type="radio" name="colour" id="purple" value="purple" >
    <label for="Delen">Purple</label>
    <br><br>
    <input type="submit" value="Instellen">
</form>
</body>
</html>
<?php
if (isset($_POST['colour'])) {
    $colour = $_POST['colour'];
    echo("<style>
        body{
            background-color: $colour;
        }
    </style>");
}
?>