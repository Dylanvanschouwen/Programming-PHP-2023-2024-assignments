<?php
//Author: Dylan van Schouwen
//File name: connect.php
//Function: Connect to Database connection

$servername = "localhost";
$username = "root";
$password = "";
$database = "fietsenmaker";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
