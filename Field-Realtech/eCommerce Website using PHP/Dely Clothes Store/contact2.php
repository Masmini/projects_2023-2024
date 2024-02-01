<?php
// Start the session (if not already started)
session_start();

// Check if the user is logged in
if (!isset($_SESSION['customer_id'])) {
    // User is not logged in, redirect to login page
    header("Location: login.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dely Stores: Contact Us</title>
    <style>
        *{
        margin: 0;
        padding: 0;
    }
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            font-family: Arial, sans-serif;
            color: black;
        }
        .overlay {
         position: relative;
    }
    .overlay::before {
           
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: rgba(0, 0, 0, 0.7);
    }
      
        header {
            background-color: white;
            padding: 10px;
            height: 40px;
            position: relative;
        }
        footer{
        bottom: 0;
        font-size: 12px;
        position: relative;
        color: white;
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

        .contact-icon{
            margin-bottom: 3px;
            text-align: center;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3); /* Whitish box shadow */
            color: white;
            position: relative;
            box-sizing: border-box;
            width: 30em;
            margin-left: auto;
            margin-right:auto;
            background-color: black;
        }
        .contact-icon img {
            margin-top: 5px;
            height: 50px;
            width: 50px;
        }
        .contact-description {
            margin-top: 5px;
        }
        .parent{
        text-align: center;
        background-image: url(shopping2.webp);
        background-size: cover;
        background-repeat: no-repeat;
    }
    h2 {
            font-size: 25px;
            margin-bottom: 20px;
            color: white;
            position: relative;
            overflow: hidden;
            padding: 10px;
        }
    </style>
</head>
<body >
    
    <header>
        <nav>
        <ul>
        <li ><a title="View home page"  href="home2.php">HOME</a></li>
        <li><a title="Learn more about our services" href="about2.php">ABOUT US</a></li>
        <li><a title="Contact our customer support team" href="contact2.php" style=" color: red;">CONTACT US</a></li>
        <li ><a title="Shop items from our store " href="shop2.php">SHOP</a></li>
        <li><a title="Edit Profile"  href="updateProfile.php"><img src="images (1).png" alt="Edit Profile" height="30px" width="30px"></a></li>
        </ul>  
        </nav>
    </header>
<div class="parent overlay">
    <h2>Please, contact us via the following methods:</h2>
   
        <div class="contact-icon">
            <a href="tel:+255746082116"><img src="tp.jpeg" alt="WhatsApp"></a>
            <div class="contact-description">WhatsApp: +255 746 082 116</div>
        </div>
        <div class="contact-icon">
            <a href="https://telegram.me/ArnoldMasmini"><img src="tg.png" alt="Telegram"></a>
            <div class="contact-description">Telegram: @ArnoldMasmini</div>
        </div>
        <div class="contact-icon">
            <a href="tel:+255746082116"><img src="phone (1).png" alt="Phone"></a>
            <div class="contact-description">Phone: +255 746 082 116</div>
        </div>
        <div class="contact-icon">
            <a href="https://www.facebook.com/arnold.andrew.7545"><img src="fb.png" alt="Facebook"></a>
            <div class="contact-description">Facebook: Arnold Andrew</div>
        </div>
        <div class="contact-icon">
            <a href="mailto:aamasmini@gmail.com"><img src="gmail.png" alt="Gmail"></a>
            <div class="contact-description">Email: aamasmini@gmail.com</div>
        </div>
        <div class="contact-icon">
            <a href="https://twitter.com/MasminiArnold"><img src="twitter.jpeg" alt="Twitter"></a>
            <div class="contact-description">Twitter: @MasminiArnold</div>
        </div>
        <div class="contact-icon">
            <a href="https://www.linkedin.com/in/arnold-masmini-35a04a252/"><img src="ln.png" alt="LinkedIn"></a>
            <div class="contact-description">LinkedIn: Arnold Masmini</div>
        </div>
        <div class="contact-icon">
            <a href="https://www.instagram.com/_minoldy"><img src="insta.png" alt="Instagram"></a>
            <div class="contact-description">Instagram: @_minoldy</div>
        </div>
    <footer style="text-align: center; margin-top: 20px;font-style: italic;">
        <p>&copy; 2023 Dely Stores. All rights reserved. Trademarks and brands are the property of their respective owners.</p></footer>
</div>       
</body>
</html>
