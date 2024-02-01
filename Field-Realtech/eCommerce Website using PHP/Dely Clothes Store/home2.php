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
    <title>Dely Stores: Home</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .overlay-dark {
             position: relative;
        }
    
        .overlay-dark::before {
               
             content: "";
             position: absolute;
             top: 0;
             left: 0;
             right: 0;
             bottom: 0;
             background-color: rgba(0, 0, 0, 0.7); 
        }
        h3{
                font-size: 20px;
                margin-bottom: 20px;
                color: red;
                position: relative;
                overflow: hidden;
                padding: 10px;
                text-align: center;
        }
        h2 {
                font-size: 25px;
                margin-bottom: 10px;
                color: white;
                position: relative;
                overflow: hidden;
                padding: 10px;
                text-align: center;
            }
    
            h2::after {
                content: "";
                display: inline-block;
                vertical-align: bottom;
                margin-left: 5px;
               /* width: 10px;
                height: 2px;
                background-color: #007bff;
                animation: underscore 0.8s infinite;*/
            }
    
            /*@keyframes underscore {
                0% {
                    transform: translateX(0);
                }
                50% {
                    transform: translateX(12px);
                }
                100% {
                    transform: translateX(24px);
                }
            }*/
        body{
            margin: 0;
                padding: 0;
                background-color: black;
                font-family: Arial, sans-serif;
                color: white;
        }
        p{
            color: white;
        }
        header{
            background-color: white;
            padding: 10px;
            height: 40px;
            color: black;
            
        }
        footer{
            bottom: 0;
            font-size: 12px;
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
            color:red;
        }
        .overlay-dark {
             position: relative;
        }
        .overlay-dark::before {
               
             content: "";
             position: absolute;
             top: 0;
             left: 0;
             right: 0;
             bottom: 0;
             background-color: rgba(0, 0, 0, 0.7); 
        }
    
    button:hover{
        cursor: pointer;
        background-color: red;
    }
    img:hover{
        cursor: pointer;
    }
    .offer{
        display: flex;
        padding: 0;
        margin: 9px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.3); /* Whitish box shadow */
    }
    .main_offer{
        flex: 1;
        padding: 50px;
        background-image: url("images (33).jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        border: 3px solid black;
        margin: 0;
    }
    .minor_offers{
        flex: 1;
        padding: 0;
        display: flex;
        flex-direction: column;
        border: 3px solid black; 
        margin: 0;
    }
    .minor_offer_01{
        padding: 20px;
        background-image: url("images (40).jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        flex: 1;
        border: 3px solid black;
    }
    .minor_offer_02{
        flex: 1;
        padding: 20px;
        background-image: url("images (44).jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        border: 3px solid black;
    }
    .praises{
        display: flex;
        padding: 3em;
        background-color: black;
        color: black;
        justify-content: space-between;
        2
        gap: 20px;
        margin: 9px;
    }
    .praise{
        flex: 1;
        padding:25px ;
        border: 3px solid black;
        border-radius:10px;
        background-color: white;
    }
    .category{ 
        padding: 10px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.3); /* Whitish box shadow */
        margin: 9px;
    }
    .extra{
        display: flex;
        flex-wrap: wrap;
    }
    
    .cat_1,.cat_2, .cat_3, .cat_4, .cat_5, .cat_6 { 
        flex: 1;
        padding: 3px;
        background-color: red;
        border: 3px solid black;
        white-space: nowrap;
    }
    .cat_1,.cat_2, .cat_3, .cat_4, .cat_5, .cat_6:hover{
        cursor: pointer;
    }
     .main_offer a, .minor_offers a{
        position: relative;
        text-decoration: none;
        text-align: center;
        padding: 15px;
        background-color: red;
        opacity: 0.7;
        color: white;
        border: 3px solid black;
    }
     .minor_offers a:hover{
        color: red;
        background-color: green;
    }
    .main_offer a:hover{
        color: red;
        background-color: green;
    }
    
    </style>
</head>
<body>

    <header>
        <nav>
        <ul>
        <li ><a title="View home page" style = " color: red;" href="home2.php">HOME</a></li>
        <li><a title="Learn more about our services" href="about2.php">ABOUT US</a></li>
        <li><a title="Contact our customer support team" href="contact2.php">CONTACT US</a></li>
         <li ><a title="Shop items from our store " href="shop2.php">SHOP</a></li>
         <li><a title="Edit Profile"  href="myProfile.php"><img src="images (1).png" alt="Edit Profile" height="30px" width="30px"></a></li>
        </ul>  
        </nav>
    </header>

    <h2 id="dynamic-heading"></h2>
    <div class="parent">
        
        <div class="offer">
            <div class="main_offer overlay-dark">
                <h2>Special offer</h2>
                <h3>Night Club Fashion</h3>
                <a href="shop2.php">SHOP NOW</a>
            </div>
            <div class="minor_offers">
                <div class="minor_offer_01 overlay-dark">
                    <h2>Special Offer</h2>
                    <h3>Casual Fashion</h3>
                    <a href="shop2.php">SHOP NOW</a>
                </div>
                <div class="minor_offer_02 overlay-dark">
                    <h2>Special Offer</h2>
                    <h3>Official Fashion</h3>
                    <a href="shop2.php">SHOP NOW</a>
                </div>
    
            </div>
        </div>
        <div class="praises">
            <div class="praise">
                <img src="4149877.png" alt="quality image" height="50px" width="50px">Quality Products
            </div>
            <div class="praise">
                <img src="360_F_372575910_pWoG31HF0x1m2EZvm54INJ0JkA4wZUUE.jpg" alt="shipping image" height="50px" width="50px">Free Shipping
            </div>
            <div class="praise">
                <img src="24-hours-customer-service-icon-24-7-support-icon-sign-button-customer-service-icon-vector.jpg" alt="support image" height="50px" width="50px">24/7 Support
            </div>
            <div class="praise">
                <img src="20-discount.jpg" alt="discount image" height="50px" width="50px"> Up to 20%off discount
            </div>
    
        </div>
        <div class="categories">
            <h2>CATEGORIES</h2>
            <div class="category">   
                <div class="extra">    
                    <div class="cat_1" onclick="redirectToShop('box_1')">
                        <img src="images (14).jpeg" alt="blouses" width="140px" height="140px">Blouses
                    </div>
                    <div class="cat_2" onclick="redirectToShop('box_2')">
                        <img src="images (20).jpeg" alt="T-Shirt for Women" width="140px" height="140px">Women's T-Shirts
                    </div>
                    <div class="cat_3" onclick="redirectToShop('box_3')">
                        <img src="images (26).jpeg" alt="Men's T-Shirts" width="140px" height="140px">Men's T-Shirts
                    </div>
                </div> 
                <div class="extra">
                    <div class="cat_4" onclick="redirectToShop('box_4')">
                        <img src="images (35).jpeg" alt="Party Dresses for Women" width="140px" height="140px">Party Dresses for Women
                    </div>
                    <div class="cat_5" onclick="redirectToShop('box_5')">
                        <img src="images (45).jpeg" alt="Party Dresses for Men" width="140px" height="140px">Party Dresses for Men
                    </div>
                    <div class="cat_6" onclick="redirectToShop('box_6')">
                        <img src="images (41).jpeg" alt="Men's Jeans" width="140px" height="140px">Men's Jeans
                    </div>
               </div>
            </div>
        </div>
    </div>
    <footer style="text-align: center; margin-top: 20px;font-style: italic;">
                    <p>&copy; 2023 Dely Stores. All rights reserved. Trademarks and brands are the property of their respective owners.</p>
    </footer>   
    <script>
    
    function redirectToShop(category) {
            // Redirect to shop2.php and pass the category as a query parameter
            window.location.href = `shop2.php?category=${category}`;
    
        }
    
        const dynamicHeading = document.getElementById('dynamic-heading');
            const statements = [
                "Welcome to Dely Stores dear Customer!",
                " Explore our stylistic designs ",
                "Buy more to get upto 20% discount and get free gifts"
            ];
            let currentIndex = 0;
    
            function typeWriterEffect() {
                const statement = statements[currentIndex];
                let index = 0;
    
                function typeNextLetter() {
                    if (index < statement.length) {
                        dynamicHeading.textContent += statement.charAt(index);
                        index++;
                        setTimeout(typeNextLetter, 100);
                    } else {
                        setTimeout(eraseStatement, 3000);
                    }
                }
    
                function eraseStatement() {
                    let currentStatement = dynamicHeading.textContent;
                    if (currentStatement.length > 0) {
                        currentStatement = currentStatement.slice(0, -1);
                        dynamicHeading.textContent = currentStatement;
                        setTimeout(eraseStatement, 50);
                    } else {
                        currentIndex = (currentIndex + 1) % statements.length;
                        setTimeout(typeWriterEffect, 500);
                    }
                }
    
                typeNextLetter();
            }
    
            typeWriterEffect();
    </script>
    </body>
    </html>