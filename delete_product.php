<?php
session_start();

/*
🧠 SECURITY:
Only logged-in users can delete
*/
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

/*
🧠 LOAD DATABASE CONNECTION
*/
include 'config.php';

/*
🧠 CHECK IF ID EXISTS
*/
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    /*
    🧠 DELETE QUERY
    */
    $sql = "DELETE FROM products WHERE id=$id";

    /*
    🧠 RUN DELETE
    */
    if ($conn->query($sql) === TRUE) {

        header("Location: products.php");
        exit();

    } else {

        echo "Error deleting product";

    }

} else {

    echo "No product ID provided";

}
?>
