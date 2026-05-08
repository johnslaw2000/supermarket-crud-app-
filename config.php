<?php

/*
🧠 DATABASE CONFIGURATION FILE
This file creates ONE reusable DB connection
*/

$conn = new mysqli("localhost", "root", "yes", "shop");

/*
🧠 CONNECTION SAFETY
*/
if ($conn->connect_error) {
    die("DB connection failed:" . $conn->connect_error);
}

?>
