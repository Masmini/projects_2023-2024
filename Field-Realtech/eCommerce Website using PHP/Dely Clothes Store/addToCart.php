<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the item data from the POST request
    $item = $_POST["item"];

    // Check if cart items are available in session storage
    if (!isset($_SESSION['cartItems'])) {
        $_SESSION['cartItems'] = array();
    }

    // Add the item to the cart
    $_SESSION['cartItems'][] = $item;

    // You can send a response to indicate success if needed
    echo "success";
} else {
    // Handle invalid requests here
    echo "error";
}
?>
