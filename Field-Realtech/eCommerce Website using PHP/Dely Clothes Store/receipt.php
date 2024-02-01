<?php
require('fpdf.php'); // Include the FPDF library

// Define the company name
$companyName = "Dely Stores";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Header
$pdf->Cell(190, 10, 'Receipt', 0, 1, 'C');

// Company Name
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 10, $companyName, 0, 1, 'C');

// Start a session to access session variables
session_start();

// Check if the user is logged in and has the customer_id in the session
if (!isset($_SESSION['customer_id'])) {
    // Redirect to a login page or handle unauthenticated users
    header("Location: login.php");
    exit();
}

$customerId = $_SESSION['customer_id'];

// Retrieve items and prices from the database for the logged-in user's cart
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delyStores"; // Use your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT item_name, cost FROM cart_items 
        WHERE cart_id IN (
            SELECT cart_id FROM cart 
            WHERE customer_id = '$customerId'
        )"; // Adjust table and column names as needed

$result = $conn->query($sql);

// Initialize the total price
$totalPrice = 0;

if ($result->num_rows > 0) {
    // Set column widths
    $itemWidth = 100;
    $priceWidth = 20;

    // Header for the items table
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell($itemWidth, 10, 'Item', 1);
    $pdf->Cell($priceWidth, 10, 'Price', 1, 1);

    // Loop through the results and display items and prices in the receipt
    while ($row = $result->fetch_assoc()) {
        $item = $row['item_name'];
        $price = "$" . $row['cost'];
        $totalPrice += $row['cost'];

        // Output items and prices in the table
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell($itemWidth, 10, $item, 1);
        $pdf->Cell($priceWidth, 10, $price, 1, 1);
    }
}

$conn->close();

// Add the total price to the receipt with italicized text
$pdf->SetFont('Arial', 'I', 14); // Set font to italic
$pdf->Cell($itemWidth, 10, 'Total Price', 1, 0, 'R'); // Align to the right
$pdf->Cell($priceWidth, 10, '$' . number_format($totalPrice, 2), 1, 1);

// Output the PDF as a downloadable file
$pdf->Output('D', 'receipt.pdf');
?>
