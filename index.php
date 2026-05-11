<?php
session_start();

/*
🧠 SECURITY CHECK
Only logged-in users can access dashboard
*/
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supermarket Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        .navbar {
            background: #2c3e50;
            color: white;
            padding: 20px 40px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        .logout-btn {
            background: #e74c3c;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 6px;
        }

        .logout-btn:hover {
            background: #c0392b;
        }

        .container {
            width: 90%;
            margin: 40px auto;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .welcome h1 {
            margin-bottom: 10px;
        }

        .card-grid {
            display: grid;

            grid-template-columns:
            repeat(auto-fit, minmax(250px, 1fr));

            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;

            box-shadow:
            0 0 10px rgba(0,0,0,0.08);

            text-align: center;
        }

        .card h3 {
            margin-bottom: 15px;
        }

        .card p {
            color: #666;
            margin-bottom: 25px;
        }

        .card a {
            text-decoration: none;
            background: #3498db;
            color: white;

            padding: 12px 18px;

            border-radius: 6px;

            display: inline-block;
        }

        .card a:hover {
            background: #2980b9;
        }
    </style>
</head>

<body>

    <div class="navbar">

        <h2>🛒 Supermarket Admin Dashboard</h2>

        <a class="logout-btn" href="logout.php">
            🚪 Logout
        </a>

    </div>

    <div class="container">

        <div class="welcome">

            <h1>🧠 Admin Dashboard</h1>

            <p>
                Manage supermarket products and inventory.
            </p>

        </div>

        <div class="card-grid">

            <div class="card">

                <h3>📦 Products</h3>

                <p>
                    Manage all supermarket products.
                </p>

                <a href="products.php">
                    View Products
                </a>

            </div>

            <div class="card">

                <h3>➕ Add Product</h3>

                <p>
                    Create and add new products.
                </p>

                <a href="add_product.php">
                    Add Product
                </a>

            </div>

            <div class="card">

                <h3>🚪 Logout</h3>

                <p>
                    Securely end your admin session.
                </p>

                <a href="logout.php">
                    Logout
                </a>

            </div>

        </div>

    </div>

</body>
</html>

