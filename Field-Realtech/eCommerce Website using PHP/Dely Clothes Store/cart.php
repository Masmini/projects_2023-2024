<!DOCTYPE html>
<html>
<head>
    <title>Dely Stores: Shopping Cart</title>
    <style>
        body {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .total {
            text-align: right;
            padding-right: 20px;
        }

        .remove-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
        }

        .remove-btn:hover {
            background-color: green;
            color: red;
            cursor: pointer;
        }

        .update-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
        }

        .update-btn:hover {
            background-color: #0056b3;
            cursor: pointer;
        }

        .pay {
            padding: 15px;
            width: 20em;
            background-color: white;
            color: black;
            text-decoration: none;
            border: 2px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .pay:hover {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        h2 {
            color: red;
        }

        .bill {
            display: flex;
            margin-left: 28em;
        }
    </style>
</head>
<body>
<h2>Your Shopping Cart</h2>
<table id="cart-table">
    <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Quantity</th>
        <th></th>
    </tr>
    <?php
    session_start(); // Start the session

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "delyStores"; // Update this to your database name

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve cart items for the signed-in user
    $customerID = $_SESSION['customer_id'];
    $sql = "SELECT cart_items.item_name, cart_items.cost, cart_items.no_items, cart_items.size 
            FROM cart_items
            INNER JOIN cart ON cart_items.cart_id = cart.cart_id
            WHERE cart.customer_id = $customerID";
    $result = $conn->query($sql);

    $totalPrice = 0;

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["item_name"] . "</td>";
            echo "<td>$" . $row["cost"] . "</td>";
            echo "<td><input type='number' id='quantity' name='quantity' min='1' max='10' value='" . $row["no_items"] . "'> 
                  <button class='update-btn' onclick='updateItem(" . $row["cost"] . ")'>Update</button></td>";
            echo "<td><button class='remove-btn' onclick='removeItem(" . $row["cost"] . ")'>Remove</button></td>";
            echo "</tr>";
            $totalPrice += $row["cost"];
        }
    } else {
        echo "<tr><td colspan='4'>No items in the cart</td></tr>";
    }

    $conn->close();

    if (isset($_GET['message']) && $_GET['message'] === 'emptyCart') {
        echo "<script>alert('Nothing in the cart, please add items to your cart.');</script>";
    }
    ?>
    <tr>
        <td class="total" colspan="3">Total Price:</td>
        <td>$<?php echo $totalPrice; ?></td>
    </tr>
</table>
<br>
<div class="bill">
    <form id="cart-form" action="check_cart.php" method="POST">
        <input type="hidden" name="totalItems" value="<?php echo $result->num_rows; ?>">
        <button type="submit" class="pay">Proceed to Payments</button>
    </form>

    <button class="pay" onclick="window.location.href='shop2.php'">Add items</button>
</div>
<script>
    function updateItem(itemPrice) {
        var quantityInput = document.getElementById('quantity');
        var newQuantity = quantityInput.value;

        // You can send an AJAX request to update the quantity in the database here
        // Example:
         $.post("update_item.php", { quantity: newQuantity, price: itemPrice }, function(data) {
             if (data.success) {
                 // Update successful
                 // You can refresh the cart or update the UI as needed
             } else {
                 alert("Failed to update item quantity.");
             }
          });
    }

    function removeItem(itemPrice) {
        if (confirm("Remove this item from the cart?")) {
            // You can send an AJAX request to remove the item from the database here
            // Example:
             $.post("remove_item.php", { price: itemPrice }, function(data) {
                 if (data.success) {
                     // Removal successful
                     // You can refresh the cart or update the UI as needed
                 } else {
                    alert("Failed to remove item.");
                 }
             });
        }
    }
</script>
</body>
</html>
