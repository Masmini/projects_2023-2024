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

$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve customer_id from the database based on the entered email
$sql = "SELECT customer_id, passcode FROM customers WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // Verify the entered password against the hashed password 
    $hashedPassword = $row['passcode'];
    if (password_verify($password, $hashedPassword)) {
        // Password is correct, set user session
        $_SESSION['customer_id'] = $row['customer_id'];
        header("Location: unconfirmedCart2.php"); // Redirect to cart or other appropriate page
        exit();
    } else {
        echo "Invalid email or password.";
        // Redirect to the login page with an error message
        header("Location: login.html?error=1");
    }
} else {
    echo "User not found";
}

$conn->close();
?>
