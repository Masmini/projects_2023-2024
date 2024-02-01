<?php
session_start();

// Check if cart items are available in session storage
if (isset($_SESSION['cartItems'])) {
    $cartItems = $_SESSION['cartItems'];
} else {
    $cartItems = array(); // No items in the cart
}

// Check if the user is logged in (you might have your own authentication logic)

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

// Check if the user is logged in
if (!isset($_SESSION['customer_id'])) {
    // User is not logged in, redirect to the login page with an error message
    header("Location: login.html?error=2");
    exit();
} else {
    // User is logged in, set $userLoggedIn to true
    $userLoggedIn = true;
}

// Function to redirect to the appropriate page based on login status
function redirectToPage($userLoggedIn) {
    if ($userLoggedIn) {
        header("Location: payments.php"); // Redirect to payments.php if logged in
    } else {
        header("Location: login.html"); // Redirect to login.html if not logged in
    }
    exit();
}

// Check if the user clicked the "Remove" button
if (isset($_POST['remove'])) {
    $indexToRemove = $_POST['remove'];

    // Remove the item from the cart and unset its session
    if (isset($cartItems[$indexToRemove])) {
        unset($cartItems[$indexToRemove]);
        $_SESSION['cartItems'] = array_values($cartItems); // Reindex the array
    }

    // Recalculate the total price
    $totalPrice = calculateTotalPrice($cartItems);
    $_SESSION['totalPrice'] = $totalPrice;
}

// Check if the user clicked the "Clear Cart" button
if (isset($_POST['clear_cart'])) {
    // Clear the entire cart by unsetting the session
    unset($_SESSION['cartItems']);

    // Reload the page after clearing the cart
    header("Location: unconfirmedCart2.php");
    exit();
}

// Calculate and store the total price in session
$totalPrice = calculateTotalPrice($cartItems);
$_SESSION['totalPrice'] = $totalPrice;

// Check if the user clicked the confirm button
if (isset($_POST['confirm'])) {
    // Perform any necessary actions before redirecting
    // For example, you might want to store the cart items in the database here

    // Then, redirect based on login status
    redirectToPage($userLoggedIn);
}


// Check if the user clicked the "Save Changes" button
if (isset($_POST['save_changes'])) {
    // Loop through the cart items and update size and quantity
    foreach ($cartItems as $index => $item) {
        $newSize = $_POST['size_' . $index];
        $newQuantity = $_POST['quantity_' . $index];

        // Update the size and quantity for the item
        $cartItems[$index]['size'] = $newSize;
        $cartItems[$index]['quantity'] = $newQuantity;
    }

    // Update the session variable with the modified cart items
    $_SESSION['cartItems'] = $cartItems;

    // Recalculate the total price
    $totalPrice = calculateTotalPrice($cartItems);
    $_SESSION['totalPrice'] = $totalPrice;
}

// Function to calculate the total price
function calculateTotalPrice($cartItems) {
    $totalPrice = 0;
    foreach ($cartItems as $item) {
        $totalPrice += $item['price'] * $item['quantity'];
    }
    return $totalPrice;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dely Stores: My Cart</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }
        button {
          padding: 10px 15px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        button:hover {
          background-color: green;
            color: red;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        header {
            background-color: white;
            padding: 10px;
            height: 40px;
        }

        header nav ul {
            display: flex;
            list-style: none;
            justify-content: space-between;
        }

        header nav ul li {
            font-size: 20px;
        }

        header nav ul li a {
            color: black;
            text-decoration: none;
        }

        header nav ul li a:hover {
            color: red;
        }
        .the_buttons{
            display:flex;
        }
        .buttons{
            flex:1;
            justify-content:space-between;
            margin: 3px;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a title="View home page" href="home2.php">HOME</a></li>
            <li><a title="Learn more about our services" href="about2.php">ABOUT US</a></li>
            <li><a title="Contact our customer support team" href="contact2.php">CONTACT US</a></li>
            <li><a title="Shop items from our store " href="shop2.php">SHOP</a></li>
            <li><a style=" color: red;" href="unconfirmedCart2.php"><img src="images (4).png"
                                                                         alt="View Cart" height="30px" width="30px">CART</a>
            </li>
            <li><a title="Edit Profile" href="myProfile.php"><img src="images (1).png" alt="Edit Profile"
                                                                  height="30px" width="30px"></a></li>
        </ul>
    </nav>
</header>
<div class="container">
    <?php if (count($cartItems) > 0): ?>
        <form method="post" id="cart-form">
            <table>
                <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cartItems as $index => $item): ?>
                    <tr id="item_<?php echo $index; ?>">
                        <td><?php echo $item['itemName']; ?></td>
                        <td class="item-price">$<?php echo number_format($item['price'], 2); ?></td>
                        <td>
                            <select name="size_<?php echo $index; ?>" data-index="<?php echo $index; ?>"
                            data-initial-value="<?php echo $item['size']; ?>">
                                <option value="small" <?php echo ($item['size'] == 'small') ? 'selected' : ''; ?>>
                                    Small (S)
                                </option>
                                <option value="medium" <?php echo ($item['size'] == 'medium') ? 'selected' : ''; ?>>
                                    Medium (M)
                                </option>
                                <option value="large" <?php echo ($item['size'] == 'large') ? 'selected' : ''; ?>>
                                    Large (L)
                                </option>
                                <option value="extra large" <?php echo ($item['size'] == 'extra large') ? 'selected' : ''; ?>>
                                    Extra Large (XL)
                                </option>
                                <option value="extra extra large" <?php echo ($item['size'] == 'extra extra large') ? 'selected' : ''; ?>>
                                    Extra Extra Large (XXL)
                                </option>
                            </select>
                        </td>
                        <td>
                        <select name="quantity_<?php echo $index; ?>"
            data-index="<?php echo $index; ?>"
            data-initial-value="<?php echo $item['quantity']; ?>">
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo '<option value="' . $i . '"';
            if ($i == $item['quantity']) {
                echo ' selected';
            }
            echo '>' . $i . '</option>';
        }
        ?>
    </select>
                        </td>
                        <td class="total-price">$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                        <td><button class="remove-button" data-index="<?php echo $index; ?>">Remove</button></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" style="text-align: right">TOTAL</td>
                    <td>$<?php echo number_format($totalPrice, 2); ?></td>
                </tr>
                </tbody>
            </table>
            <div class="the_buttons">
                <button class="buttons" type="button" id="save_changes" name="save_changes" onclick="window.location.href='unconfirmedCart2.php'">Save Changes</button>
                <button class="buttons" type="submit" id="confirm" name="confirm">Proceed to Checkout</button>
                <button class="buttons" type="submit" id="clear_cart" name="clear_cart">Clear Cart</button>
               </div>
        </form>   
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</div>
<script>

    // Add event listeners to the Remove buttons
    const removeButtons = document.querySelectorAll('.remove-button');
    removeButtons.forEach(button => {
        button.addEventListener('click', function () {
            const index = this.getAttribute('data-index');
            const row = document.getElementById('item_' + index);
            row.remove();

            // Remove the item from the cart using an AJAX request
            removeFromCart(index);
        });
    });

   // Add event listeners to the quantity and size inputs
   const quantitySelects = document.querySelectorAll('select[name^="quantity_"]');
const sizeInputs = document.querySelectorAll('select[name^="size_"]');

quantitySelects.forEach(select => {
    select.addEventListener('change', function () {
        const index = this.getAttribute('data-index');
        const newValue = this.value;
        const initialValue = this.getAttribute('data-initial-value');

        // Only update the session and cart table if the value has changed
        if (newValue !== initialValue) {
            // Update the session and the cart table using an AJAX request
            updateItemQuantity(index, newValue);
        }
    });
});



sizeInputs.forEach(input => {
    input.addEventListener('change', function () {
        const index = this.getAttribute('data-index');
        const newValue = this.value;
        const initialValue = this.getAttribute('data-initial-value');

        // Only update the session and cart table if the value has changed
        if (newValue !== initialValue) {
            // Update the session and the cart table using an AJAX request
            updateItemSize(index, newValue);
        }
    });
});
       // Function to remove an item from the cart using AJAX
       function removeFromCart(index) {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Reload the page after successfully removing the item
                location.reload();
            }
        };
        
        // Send a POST request to a PHP script to update the cart
        xhr.open('POST', 'item_remove.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('index=' + index);
    }


    // Function to update item quantity using AJAX
    function updateItemQuantity(index, newValue) {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                if (xhr.responseText === 'success') {
                    // Quantity updated successfully
                    // You can provide user feedback if needed
                } else {
                    // Handle errors if necessary
                }
            }
        };

        // Send a POST request to a PHP script to update the quantity
        xhr.open('POST', 'item_update_quantity.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('index=' + index + '&quantity=' + newValue);
    }
    
    // Function to update item size using AJAX
    function updateItemSize(index, newValue) {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                if (xhr.responseText === 'success') {
                    // Size updated successfully
                    // You can provide user feedback if needed
                } else {
                    // Handle errors if necessary
                }
            }
        };

        // Send a POST request to a PHP script to update the size
        xhr.open('POST', 'item_update_size.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('index=' + index + '&size=' + newValue);
    }

    // Prevent the default form submission behavior
    const saveChangesButton = document.getElementById('save_changes');
    saveChangesButton.addEventListener('click', function (event) {
        event.preventDefault();
        // Handle the form submission here
        // Update sessions and cart table as needed
    });
</script>


</body>
</html>
