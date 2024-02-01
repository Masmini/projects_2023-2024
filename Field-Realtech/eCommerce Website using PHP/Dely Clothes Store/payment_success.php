
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }
        span{
            color:red;
        }

        .success-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .success-icon {
            font-size: 48px;
            color: #2ecc71;
            margin-bottom: 20px;
        }

        .success-message {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .top {
          display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 20px;
            gap:20px;
        }

        .top a {
            padding: 10px 15px;
            background-color: white;
            color: black;
            text-decoration: none;
            border: 2px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            margin-right:30px;
            width:15em;
        }

        .top a:hover {
            background-color: #007bff;
            color: white;
        }

        .home-link {
            text-decoration: none;
            color: #007bff;
            border: 1px solid #007bff;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 18px;
            transition: background-color 0.3s, color 0.3s;
        }

        .home-link:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">&#10004;</div>
        <div class="success-message">Payment Successful!</div>
        <p>Your payment has been processed successfully.</p>
        <p>Thanks for Purchasing Items with <span>Dely Stores&#8482;</span></p>
        <div id="loadingDiv" >
            <p style="font-size: 30px;">Verifying Your Purchase ...</p>
        </div>
        <div class="top">
            <a href="receipt.php" class="home-link">Download Your Order Slip</a>
            <a href="home2.php" class="home-link">Go back to Home</a>
        </div>
    </div>
    <script>
        // Show loading message immediately
        document.getElementById("loadingDiv").style.display = "block";
        document.getElementById("loadingDiv").style.backgroundColor = "red";
        document.getElementById("loadingDiv").style.color = "white";
        document.getElementById("loadingDiv").style.textAlign = "center";
        document.getElementById("loadingDiv").style.padding = "100%";
        document.getElementById("loadingDiv").style.position = "fixed";
        document.getElementById("loadingDiv").style.top = "50%";
        document.getElementById("loadingDiv").style.left = "50%";
        document.getElementById("loadingDiv").style.transform = "translate(-50%, -50%)";
        document.getElementById("loadingDiv").style.zIndex = "9999";

        // Hide loading message after 3 seconds
        setTimeout(function () {
            document.getElementById("loadingDiv").style.display = "none";
        }, 3000); // 3 seconds
    </script>
</body>
</html>
