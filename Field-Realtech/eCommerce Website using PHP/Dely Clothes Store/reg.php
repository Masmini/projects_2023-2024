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

// Retrieve data from the registration form

$email = $_POST['email'];
$passcode = $_POST['passcode'];


// Hash the password for security
$hashedPassword = password_hash($passcode, PASSWORD_DEFAULT);

// Insert data into the customers table
$sql = "INSERT INTO customers (email, passcode) VALUES ('$email', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    // Registration successful, set user session and redirect
    $_SESSION['customer_id'] = $conn->insert_id;
    header("Location: cart.php"); // Redirect to cart or other appropriate page
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
