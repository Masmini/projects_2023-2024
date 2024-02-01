<?php
// Start the session (if not already started)
session_start();

// Unset and destroy all sessions (replace these with your specific session names)
unset($_SESSION['totalPrice']);
unset($_SESSION['pickup_location']);
unset($_SESSION['cartItems']);

// Redirect to home2.php
header("Location: payment_success.php");
exit();
?>
