<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myvacation: Sign-Up</title>
    <style>
 body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: blue;
            margin-top: 1.875em;
            font-size: 28px;
            padding-top: 3.75em;
        }

        form {
            max-width: 25em;
            margin: 1.25em auto;
            padding: 1.25em;
            border-radius: 8px;
            background-color: whitesmoke;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: black;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 0.9375em;
            border: 1px solid black;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: green;
            color: white;
        }

        p {
            color: black;
            text-align: center;
            margin-top: 0.9375em;
        }

        p a {
            color: blue;
            text-decoration: none;
        }

        p a:hover {
            color: green;
        }
                /* Animation */
                .animated {
            animation: fadeInUp 1s ease-in-out; /* Add animation */
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px); 
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
@include('header')
    <h2 class="animated">Sign-In to Your Account</h2>
    <form id="loginForm" action="login.php" method="post" class="animated" >
        <div>
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <input type="submit" value="Sign-In">
        </div>
    </form>
    <p class="animated">Don't have an account? <a href="/registration">Sign-Up</a></p>
</body>
</html>
