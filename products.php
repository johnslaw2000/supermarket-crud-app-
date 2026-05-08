<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

/*
🧠 GET PRODUCTS FROM DATABASE
*/
$sql = "SELECT * FROM products ORDER BY id DESC";

$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>

<style>
body {
    font-family: Arial;
    background: #f4f6f9;
    margin: 0;
}

.header {
    background: #2c3e50;
    color: white;
    padding: 20px;
    text-align: center;
}

.container {
    width: 90%;
    margin: 30px auto;
}

.top-bar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.top-bar a {
    background: #27ae60;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
}

table {
    width: 100%;
    background: white;
    border-collapse: collapse;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

th {
    background: #3498db;
    color: white;
    padding: 12px;
}

td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #eee;
}

tr:hover {
    background: #f2f2f2;
}

.btn {
    padding: 6px 10px;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    font-size: 13px;
}

.edit {
    background: #f39c12;
}

.delete {
    background: #e74c3c;
}
</style>

</head>

<body>

<div class="header">
    🛒 FreshMart Product Dashboard
</div>

<div class="container">

<div class="top-bar">
    <h2>All Products</h2>

    <a href="add_product.php">+ Add Product</a>
</div>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Actions</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>
    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['name']; ?></td>

    <td>$<?php echo $row['price']; ?></td>

    <td>

        <a class="btn edit"
        href="edit_product.php?id=<?php echo $row['id']; ?>">
        Edit
        </a>

        <a class="btn delete"
        href="delete_product.php?id=<?php echo $row['id']; ?>">
        Delete
        </a>

    </td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>
