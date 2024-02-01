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

// Retrieve email from the AJAX request
$email = json_decode(file_get_contents('php://input'))->email;

// Check if the email already exists in the customers table
$sql = "SELECT * FROM customers WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Email already exists
    $response = array('exists' => true);
    echo json_encode($response);
} else {
    // Email does not exist
    $response = array('exists' => false);
    echo json_encode($response);
}

$conn->close();
?>
