<?php
// Start the session (if not already started)
session_start();

// Check if the user is logged in
if (isset($_SESSION['customer_id'])) {
    // User is logged in, redirect to about2.php page
    header("Location: about2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dely Stores: About</title>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        margin: 0;
        padding: 0;
        background-color: black;
        font-family: Arial, sans-serif;
        color: white;
    }
    .overlay{
        position: relative;
    }
    .overlay::before{
        content: "";
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        background-color: rgba(0,0,0,0.7);
    }
    header{
        background-color: white;
        padding: 10px;
        height: 40px;
        position: relative;
        margin-bottom: 0;
    }
    footer{
        bottom: 0;
        font-size: 12px;
        position: relative;
    }
    header nav ul{
        display: flex;
        list-style: none;
        justify-content: space-between;
    }
    header nav ul li{
        font-size: 20px;
    }
    header nav ul li a{
        color: black;
        text-decoration: none;
    }
    header nav ul li a:hover{
        color: red;
    }
    .about-container {
        box-sizing: border-box;
        width: 700px;
        margin-top: 10px;
        padding: 40px;
        text-align: center;
        position: relative;
        background-color: black;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.3); /* Whitish box shadow */
    }
    .about-heading {
            font-size: 25px;
            margin-bottom: 20px;
            color: white;
            position: relative;
            overflow: hidden;
            padding: 10px;
    }
    .about-text {
        position: relative;
        font-size: 18px;
        line-height: 1.6;
        color: white;
    }
    .parent{
        text-align: center;
        background-image: url(shopping2.webp);
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
</head>
<body >
    <header>
        <nav>
        <ul>
        <li ><a title="View home page"  href="home.php">HOME</a></li>
        <li><a title="Learn more about our services" href="about.php " style=" color: red;">ABOUT US</a></li>
        <li><a title="Contact our customer support team" href="contact.php">CONTACT US</a></li>
        <li ><a title="Shop items from our store " href="shop.php">SHOP</a></li>
        <li><a title="Register/Sign-In"  href="login.html"><img src="images (13).jpeg" alt="Register/Sign-In" height="30px" width="30px"></a></li>
        </ul>  
        </nav>
    </header>
<div class="parent overlay">
    <h2 class="about-heading">About Dely Stores</h2>
<div class="about-container">
    
    <p class="about-text">
        Welcome to Dely Stores, your ultimate destination for trendy and high-quality fashion. Established in 2023, we are dedicated to bringing you the latest fashion trends and providing a seamless shopping experience.
        <br><br>
        Our mission is to make you look and feel your best by offering a curated selection of clothing and accessories for every occasion. From elegant blouses to stylish T-shirts and classy party dresses, we have something for everyone.
        <br><br>
        Our team of fashion enthusiasts is committed to staying ahead of the curve and ensuring that our collection reflects the latest styles. We take pride in delivering exceptional customer service and quality products that exceed your expectations.
        <br><br>
        Thank you for choosing Dely Stores. Join us on this fashionable journey and let's redefine style together.
    </p>

</div>

<footer style="text-align: center; margin-top: 20px;font-style: italic;">
    <p>&copy; 2023 Dely Stores. All rights reserved. Trademarks and brands are the property of their respective owners.</p></footer>
</div>
</body>
</html>
