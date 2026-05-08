<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

/*
🧠 GET FORM DATA
*/
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

/*
🧠 UPDATE QUERY
*/
$sql = "UPDATE products
SET name='$name', price='$price'
WHERE id=$id";

/*
🧠 EXECUTE UPDATE
*/
if ($conn->query($sql) === TRUE) {

    header("Location: products.php");
    exit();

} else {

    die("Error updating product: " . $conn->error);

}
?>
