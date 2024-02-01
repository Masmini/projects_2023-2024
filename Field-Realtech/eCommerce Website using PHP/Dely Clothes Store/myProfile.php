<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['customer_id'])) {
    header("Location: login.html");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delyStores"; // Update to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$customer_id = $_SESSION['customer_id'];

// Retrieve customer information from the database
$sql = "SELECT * FROM customers WHERE customer_id='$customer_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $hashedPassword = $row['passcode'];
}

$conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['checkPassword'])) {
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];

        // Verify the old password
        if (password_verify($oldPassword, $hashedPassword)) {
            // Password is correct, allow updating the new password
            $updatePassword = true;
        } else {
            $updateError = "Old password is incorrect.";
        }
    } elseif (isset($_POST['updatePassword'])) {
        $newPassword = $_POST['newPassword'];
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update the hashed password in the database
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE customers SET passcode='$hashedPassword' WHERE customer_id='$customer_id'";

        if ($conn->query($sql)) {
            // Password updated successfully
            $conn->close();
            header("Location: myProfile.php");
            exit();
        } else {
            echo "Error updating password: " . $conn->error;
        }

        $conn->close();
    } elseif (isset($_POST['logout'])) {
        // User clicked the logout button
        // Clear all session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();

        // Redirect to the login page
        header("Location: logout.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
            color: white;
            text-align:center;
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
          cursor: pointer;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            font-size: 28px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            background-color: black;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 3px solid white;
            color: white;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: white;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            border: 3px solid red;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #ff0000;
        }

        p {
            text-align: center;
            margin-top: 15px;
            color: red; /* Added a red color for error messages */
        }

        p a {
            color: #ff0000;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>My Profile</h2>
    <table style="margin-left:auto; margin-right:auto;">
        <tr >
            <td style="border:2px solid; ">Email:</td>
            <td style="border:2px solid; color:green;"><?php echo $email; ?></td>
        </tr>
       
    </table>
    <?php if (isset($updatePassword)): ?>
        <form method="post">
            <h2>Change Password</h2>
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%?&]).{6,}$"
                title="Password must be at least 8 characters, including at least one uppercase letter, one lowercase letter, one number and at least the following symbols @, $, !, %, ?, &:"
                required>
            <button type="submit" name="updatePassword">Update Password</button>
        </form>
    <?php else: ?>
        <form method="post">
            <?php if (isset($updateError)): ?>
                <p><?php echo $updateError; ?></p>
            <?php endif; ?>
            <h2>Change Your Password</h2><br><br>
            <label for="oldPassword"> Enter your Old Password:</label>
            <input type="password" id="oldPassword" name="oldPassword" required>
            <button type="submit" name="checkPassword">Verify</button>
        </form>
    <?php endif; ?>
    <form method="post">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
