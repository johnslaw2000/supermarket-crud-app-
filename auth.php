<?php
session_start();

$conn = new mysqli("localhost", "root", "yes", "shop");

include 'config.php';

// ensure form was submitted
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    die("No login data received");
}

$username = $_POST['username'];
$password = $_POST['password'];

// fetch user
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result && $result->num_rows == 1) {

    $user = $result->fetch_assoc();

    // simple password check (we can upgrade later)
    if ($password == $user['password']) {

        $_SESSION['user'] = $username;

        header("Location: index.php");
        exit();

    } else {
        echo "Wrong password";
    }

} else {
    echo "User not found";
}
?>
