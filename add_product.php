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
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
}

.form-box h2 {
    text-align: center;
}

.form-box input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
}

button {
    width: 100%;
    padding: 10px;
    background: #27ae60;
    border: none;
    color: white;
    cursor: pointer;
}
</style>

<div class="form-box">
    <h2>➕ Add Product</h2>

    <form action="save_product.php" method="POST">

        <input type="text" name="name" placeholder="Product Name" required>

        <input type="number" name="price" placeholder="Price" step="0.01" required>

        <button type="submit">Save Product</button>

    </form>
</div>
