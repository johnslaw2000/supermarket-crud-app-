```php
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if (!isset($_GET['id'])) {
    die("No product ID provided");
}

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM products WHERE id=$id");

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

        .form-box {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        .form-box button {
            width: 100%;
            padding: 10px;
            background: #2196F3;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-box button:hover {
            background: #1976D2;
        }
    </style>
</head>

<body>

<div class="form-box">

    <h2>✏ Edit Product</h2>

    <form action="update_product.php" method="POST">

        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <input
            type="text"
            name="name"
            placeholder="Product Name"
            value="<?= $product['name'] ?>"
            required
        >

        <input
            type="number"
            step="0.01"
            name="price"
            placeholder="Price"
            value="<?= $product['price'] ?>"
            required
        >

        <button type="submit">💾 Update Product</button>

    </form>

</div>

</body>
</html>
```

