<?php
$conn = new mysqli("localhost", "root", "yes", "shop");

if ($conn->connect_error) {
    die("DB failed: " . $conn->connect_error);
}

echo "DB connection works 🚀";
?>
