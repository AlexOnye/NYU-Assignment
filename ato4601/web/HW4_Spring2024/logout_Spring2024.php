<?php
session_start();
session_destroy();
header('Location: Login_Spring2024.php'); // Redirect to the login page after destroying the session
exit();
?>