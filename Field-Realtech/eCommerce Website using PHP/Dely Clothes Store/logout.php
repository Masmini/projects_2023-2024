<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to home.php after logging out
header("Location: home.php");
exit();
?>
