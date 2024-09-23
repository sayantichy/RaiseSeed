<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "raiseseed";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
