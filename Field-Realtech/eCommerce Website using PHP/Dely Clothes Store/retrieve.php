<?php
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

// Fetch all data from the cart and users tables
$sql = "SELECT c.cart_id, c.customer_id, c.pickup_point, c.total_price, c.check_payments, u.email
        FROM cart c
        INNER JOIN users u ON c.customer_id = u.user_id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Carts</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>All Carts</h1>

    <table>
        <tr>
            <th>Cart ID</th>
            <th>User Email</th>
            <th>Pickup Point</th>
            <th>Total Price</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["cart_id"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["pickup_point"] . "</td>";
                echo "<td>" . '$' . $row["total_price"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No carts found.</td></tr>";
        }
        ?>
    </table>

    <?php
    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
