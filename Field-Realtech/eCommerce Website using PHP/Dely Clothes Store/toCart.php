<?php
// Start a session to access session variables
session_start();

// Check if the user is logged in and has necessary session variables set
if (!isset($_SESSION['customer_id']) || !isset($_SESSION['pickup_location']) || !isset($_SESSION['cartItems']) || !isset($_SESSION['totalPrice'])) {
    // Redirect or handle the situation where session variables are missing
    header("Location: login.php"); // Redirect to a login page or appropriate error page
    exit();
}

// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // No password
$dbname = "delyStores";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from session storage variables
$customerID = $_SESSION['customer_id'];
$pickupLocation = $_SESSION['pickup_location'];
$cartItems = $_SESSION['cartItems'];
$totalPrice = $_SESSION['totalPrice'];

// Insert data into the cart table
$cartInsertSQL = "INSERT INTO cart (customer_id, pickup_point, total_price, check_payments) VALUES ('$customerID', '$pickupLocation', '$totalPrice', 0)";

if ($conn->query($cartInsertSQL) === TRUE) {
    $cartID = $conn->insert_id;
} else {
    echo "Error inserting into cart table: " . $conn->error;
}

// Insert data into the cart_items table for each item
foreach ($cartItems as $item) {
    $itemName = $item['itemName'];
    $noItem = $item['quantity'];
    $size = $item['size'];
    $cost = $item['price'] * $noItem;

    $cartItemsInsertSQL = "INSERT INTO cart_items (cart_id, item_name, no_items, size, cost) 
                           VALUES ('$cartID', '$itemName', '$noItem', '$size', '$cost')";
    
    if ($conn->query($cartItemsInsertSQL) !== TRUE) {
        echo "Error inserting into cart_items table: " . $conn->error;
    }
}

// Close the database connection
$conn->close();

// Redirect to a success page or back to the shopping page
header("Location: clear_cart.php"); // Replace with the appropriate URL
exit();
?>
