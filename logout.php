<?php
session_start();

/*
🧠 WHAT THIS DOES:
- Deletes login session
- Logs user out completely
*/

session_destroy();

// send back to login page
header("Location: login.php");
exit();
?>
