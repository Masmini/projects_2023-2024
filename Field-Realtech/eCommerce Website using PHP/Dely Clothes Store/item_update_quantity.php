<?php
session_start();

if (isset($_POST['index']) && isset($_POST['quantity'])) {
    $index = $_POST['index'];
    $quantity = $_POST['quantity'];

    // Update the session data for the specified item index
    if (isset($_SESSION['cartItems'][$index])) {
        $_SESSION['cartItems'][$index]['quantity'] = $quantity;
    }
    
    // Return a success response
    echo 'success';
}
?>
