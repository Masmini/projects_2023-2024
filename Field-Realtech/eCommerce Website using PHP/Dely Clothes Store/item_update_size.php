<?php
session_start();

if (isset($_POST['index']) && isset($_POST['size'])) {
    $index = $_POST['index'];
    $size = $_POST['size'];

    // Update the session data for the specified item index
    if (isset($_SESSION['cartItems'][$index])) {
        $_SESSION['cartItems'][$index]['size'] = $size;
    }
    
    // Return a success response
    echo 'success';
}
?>
