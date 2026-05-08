<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

/*
🧠 CHECK PRODUCT ID
*/
if (!isset($_GET['id'])) {
    die("No product ID provided");
}

$id = $_GET['id'];

/*
🧠 GET PRODUCT FROM DATABASE
*/
$sql = "SELECT * FROM products WHERE id = $id";

$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

$product = $result->fetch_assoc();

if (!$product) {
    die("Product not found");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Product</title>

<style>
body {
    font-family: Arial;
    background: #f4f6f9;
}

.card {
    width: 400px;
    margin: 50px auto;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

.card h2 {
    text-align: center;
}

.card input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
}

button {
    width: 100%;
    padding: 10px;
    background: #3498db;
    border: none;
    color: white;
    cursor: pointer;
}
</style>

</head>

<body>

<div class="card">

<h2>✏ Edit Product</h2>

<form action="update_product.php" method="POST">

<input type="hidden" name="id"
value="<?php echo $product['id']; ?>">

<input type="text" name="name"
value="<?php echo $product['name']; ?>" required>

<input type="number" step="0.01" name="price"
value="<?php echo $product['price']; ?>" required>

<button type="submit">Update Product</button>

</form>

</div>

</body>
</html>
