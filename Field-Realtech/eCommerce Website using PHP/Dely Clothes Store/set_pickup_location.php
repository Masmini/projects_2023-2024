<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pickup_location"])) {
    $_SESSION['pickup_location'] = $_POST["pickup_location"];
    echo "Location set in session.";
} else {
    echo "Failed to set location in session.";
}
?>
