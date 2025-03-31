<?php
$servername = "localhost";
$username = "root";  // Default: root (Agar XAMPP use kar rahe ho)
$password = "";  // Default: "" (blank)
$database = "canteen_db"; // Jo database create kiya tha

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
