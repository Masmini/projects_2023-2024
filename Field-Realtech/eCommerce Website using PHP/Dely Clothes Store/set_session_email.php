<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    
    // Set the email as a session variable
    $_SESSION['verifiedEmail'] = $email;

    // Return a success response
    echo json_encode(['success' => true]);
} else {
    // Return an error response if the request method is not POST
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?>
