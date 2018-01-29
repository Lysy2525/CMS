<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "test");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
echo "Użytkownik dodany prawidłowo!";

$login = $_POST['login'];
$haslo = $_POST['haslo'];

$zapytanie = "INSERT INTO `konta` (`login`, `haslo`) VALUES ('$login', '$haslo');";
$conn->query($zapytanie);
?>