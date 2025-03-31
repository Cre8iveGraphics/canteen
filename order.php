<?php
include 'db.php';
session_start();

$guest_name = $_POST['guest_name'];
$guest_phone = $_POST['guest_phone'];
$items = $_POST['items'];
$total_price = $_POST['total_price'];

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 'NULL';

$sql = "INSERT INTO orders (user_id, guest_name, guest_phone, items, total_price, status) 
        VALUES ($user_id, '$guest_name', '$guest_phone', '$items', '$total_price', 'Pending')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
