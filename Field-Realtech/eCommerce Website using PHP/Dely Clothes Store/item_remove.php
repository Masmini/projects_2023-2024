<?php
session_start();

if (isset($_POST['index'])) {
    $indexToRemove = $_POST['index'];

    // Check if cart items are available in session storage
    if (isset($_SESSION['cartItems'])) {
        $cartItems = $_SESSION['cartItems'];

        // Remove the item from the cart and unset its session
        if (isset($cartItems[$indexToRemove])) {
            unset($cartItems[$indexToRemove]);
            $_SESSION['cartItems'] = array_values($cartItems); // Reindex the array
        }

        // Recalculate the total price
        $totalPrice = calculateTotalPrice($cartItems);
        $_SESSION['totalPrice'] = $totalPrice;

        // Send a success response
        echo 'Item removed successfully';
    } else {
        // Send an error response if cart items are not found
        echo 'Cart is empty';
    }
} else {
    // Send an error response if the 'index' parameter is not set
    echo 'Invalid request';
}

function calculateTotalPrice($cartItems) {
    $totalPrice = 0;
    foreach ($cartItems as $item) {
        $totalPrice += $item['price'] * $item['quantity'];
    }
    return $totalPrice;
}
?>
