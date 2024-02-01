<?php
session_start();

// Set the session variable
$_SESSION['payment_success_access'] = true;


$totalPrice = isset($_SESSION['totalPrice']) ? $_SESSION['totalPrice'] : '';
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        #PriceValue {
            color: green;
            font-size: 36px;
        }

        #DelyStores {
            font-weight: bold;
            font-style: italic;
            color: red;
        }

        .top {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .top a {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;
        }

        .top a:hover {
            background-color: #0056b3;
        }

        button {
            padding: 12px 24px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    

    <div class="container">
        <h1>Paying <span id="PriceValue">$<?php echo $totalPrice; ?></span> to <span id="DelyStores">Dely Stores</span></h1>

        <div class="top">
            <button onclick="reviewCart()">Review Your Cart</button>
            <select id="pickupPointSelect">
                <option value="" disabled selected>Select Pickup Point</option>
                <optgroup label="Dar es Salaam">
                    <option value="Shoppers Plaza">Shoppers Plaza</option>
                    <option value="Mlimani City Mall">Mlimani City Mall</option>
                    <option value="Aura Mall">Aura Mall</option>
                    <option value="DFM">DFM</option>
                </optgroup>
                <optgroup label="Arusha">
                    <option value="Pickup Point 1">Pickup Point 1</option>
                    <option value="Pickup Point 2">Pickup Point 2</option>
                    <option value="Pickup Point 3">Pickup Point 3</option>
                </optgroup>
                <optgroup label="Dodoma">
                    <option value="Pickup Point A">Pickup Point A</option>
                    <option value="Pickup Point B">Pickup Point B</option>
                    <option value="Pickup Point C">Pickup Point C</option>
                </optgroup>
            </select>
        </div>

        <button id="proceedButton">Proceed to Payments</button>
    </div>

    <script>
    function reviewCart() {
        // Redirect to the cart review page (unconfirmedCart2.php)
        window.location.href = 'unconfirmedCart2.php';
    }

    var proceedButton = document.getElementById("proceedButton");

    proceedButton.addEventListener("click", function () {
        var pickupPointSelect = document.getElementById("pickupPointSelect");
        var selectedPickupPoint = pickupPointSelect.value;

        // Check if a pickup point is selected
        if (selectedPickupPoint) {
            // Use AJAX to set the selected pickup location in the PHP session
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "set_pickup_location.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Redirect to payment_methods.php after successfully setting the session variable
                    window.location.href = 'payment_methods.php';
                }
            };
            xhr.send("pickup_location=" + selectedPickupPoint);
        } else {
            // Alert the customer to select a pickup point first
            alert('Please select a pickup point before proceeding to payments.');
        }
    });
    </script>
</body>
</html>
