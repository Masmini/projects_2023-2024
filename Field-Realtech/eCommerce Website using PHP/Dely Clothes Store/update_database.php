<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve email and pickup point from the POST request
    $email = $_POST["email"];
    $pickupPoint = $_POST["pickup_point"];

    // Database connection configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myCart"; // Replace with your database name

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email exists in the theUsers table
    $checkEmailQuery = "SELECT email FROM theUsers WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // The email exists in the theUsers table, proceed with the update
        $sql = "UPDATE theCart SET pickup_point = '$pickupPoint' WHERE email = '$email'";

        if ($conn->query($sql) === TRUE) {
            // If the query was successful, send a success response
            $response = array("success" => true);
            echo json_encode($response);
        } else {
            // If there was an error, send an error response
            $response = array("success" => false, "error" => $conn->error);
            echo json_encode($response);
        }
    } else {
        // The email does not exist in the theUsers table, send an error response
        $response = array("success" => false, "error" => "Email not found in theUsers table");
        echo json_encode($response);
    }

    // Close the database connection
    $conn->close();
} else {
    // If the request is not a POST request, return an error response
    $response = array("success" => false, "error" => "Invalid request method");
    echo json_encode($response);
}
?>
