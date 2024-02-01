<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delyStores"; // Update this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newQuantity = $_POST['quantity'];
    $itemPrice = $_POST['price'];
    $customerID = $_SESSION['customer_id'];

    // Perform the database update
    $sql = "UPDATE cart_items 
            SET no_items = $newQuantity 
            WHERE customer_id = $customerID AND cost = $itemPrice";
    
    if ($conn->query($sql) === TRUE) {
        $response = array("success" => true);
        echo json_encode($response);
    } else {
        $response = array("success" => false);
        echo json_encode($response);
    }
} else {
    header("HTTP/1.1 400 Bad Request");
    echo "Invalid request method.";
}

$conn->close();
?>
