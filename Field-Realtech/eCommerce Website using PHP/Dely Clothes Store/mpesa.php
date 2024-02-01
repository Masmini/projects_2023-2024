<?php

session_start();



// Check if the user is logged in
if (!isset($_SESSION['customer_id'])) {
    // User is not logged in, redirect to login page
    header("Location: login.html");
    exit();
}
// Get the total price from the session
$totalPrice = isset($_SESSION['totalPrice']) ? $_SESSION['totalPrice'] : 0;
?>
    
    
<!DOCTYPE html>
<html>
<head>
    <title>Pay with M-Pesa</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-left:auto;
            margin-right:auto;
        }

        input[type="email"],
        input[type="text"],
        input[type="number"] {
            width:20em;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        h1{
            color:red;
        }
    </style>
</head>
<body>

    <h1>Pay with M-Pesa</h1>
    <form action="mpesa.php" method="POST">
    <label for="mpesa_number">M-Pesa Number:</label>
        <input type="text" id="mpesa_number" name="mpesa_number" pattern="\+255[0-9]{9}" placeholder="+255*********" required><br>
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" step="0.01" value="<?php echo '$' . $totalPrice; ?>" readonly><br>
        <input type="submit" value="Pay with M-Pesa">
    </form>
<script>
    document.querySelector("form").addEventListener("submit", function (event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Show loading alert
        let loadingAlert = document.createElement("div");
        loadingAlert.innerText = "Processing Payment Request...";
        loadingAlert.style.backgroundColor = "white";
        loadingAlert.style.color = "black";
        loadingAlert.style.textAlign = "center";
        loadingAlert.style.padding = "100%";
        loadingAlert.style.position = "fixed";
        loadingAlert.style.top = "50%";
        loadingAlert.style.left = "50%";
        loadingAlert.style.transform = "translate(-50%, -50%)";
        loadingAlert.style.zIndex = "9999";
        document.body.appendChild(loadingAlert);

        // Delay the redirection to payment_success.php by 5 seconds
        setTimeout(function () {
            // Redirect to payment success page
            window.location.href = "toCart.php";
        }, 4000); // 4 seconds
    });
</script>    
</body>
</html>
