<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name, price) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sd", $name, $price);

if ($stmt->execute()) {

    header("Location: products.php");
    exit();

} else {
    die("Insert failed: " . $conn->error);
}
?>
