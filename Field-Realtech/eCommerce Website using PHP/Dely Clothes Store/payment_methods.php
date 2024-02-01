<?php

session_start();

// Set the session variable
$_SESSION['payment_success_access'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Methods</title>
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 100%;
            max-width: 600px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .payment-method {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .payment-method img {
            max-width: 80px;
            margin-right: 20px;
        }

        .payment-method-description {
            flex: 1;
        }

        .payment-method-description p {
            font-size: 16px;
            margin: 0;
        }

        .payment-method-link {
            margin-top: 10px;
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;
            width:15em;
        }

        .payment-method-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select a Payment Method</h1>

        <div class="payment-method">
            <img src="mpesa.png" alt="MPESA">
            <div class="payment-method-description">
                <p>Pay with MPESA. Click below to proceed with your payment.</p>
                <a class="payment-method-link" href="mpesa.php">Pay with MPESA</a>
            </div>
        </div>

        <div class="payment-method">
            <img src="airtel.png" alt="Airtel Money">
            <div class="payment-method-description">
                <p>Pay with Airtel Money. Click below to proceed with your payment.</p>
                <a class="payment-method-link" href="airtel_money.php">Pay with Airtel Money</a>
            </div>
        </div>

        <div class="payment-method">
            <img src="halo.png" alt="Halopesa">
            <div class="payment-method-description">
                <p>Pay with Halopesa. Click below to proceed with your payment.</p>
                <a class="payment-method-link" href="halopesa.php">Pay with Halopesa</a>
            </div>
        </div>

        <div class="payment-method">
            <img src="pp.png" alt="PayPal">
            <div class="payment-method-description">
                <p>Pay with PayPal. Click below to proceed with your payment.</p>
                <a class="payment-method-link" href="paypal.php">Pay with PayPal</a>
            </div>
        </div>

        <div class="payment-method">
            <img src="tigo.png" alt="Tigo Pesa">
            <div class="payment-method-description">
                <p>Pay with Tigo Pesa. Click below to proceed with your payment.</p>
                <a class="payment-method-link" href="tigo_pesa.php">Pay with Tigo Pesa</a>
            </div>
        </div>

        <div class="payment-method">
            <img src="visa.png" alt="VISA">
            <div class="payment-method-description">
                <p>Pay with VISA. Click below to proceed with your payment.</p>
                <a class="payment-method-link" href="visa.php">Pay with VISA</a>
            </div>
        </div>
    </div>
</body>
</html>
