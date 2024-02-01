<?php
// Start the session (if not already started)
session_start();

// Check if the user is logged in
if (isset($_SESSION['customer_id'])) {
    // User is logged in, redirect to shop2.php page
    header("Location: shop2.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dely Stores: Shop</title>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    
    h2 {
            font-size: 25px;
            margin-bottom: 10px;
            color: white;
        
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
        position: fixed;
        width: 99%;
        top: 0;
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
    h3{
        color: white;
    }
    .parent{
        border: 3px solid white;
        margin-top: 70px;
        
    }
    .left{
    
        padding: 10px;
        
    }
    
    .overlay-dark {
         position: relative;
    }

    
    .box{
        display: flex;
        flex-wrap: wrap;
    }
    .box img{  
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.3); /* Whitish box shadow */
    }
.store_item{
    margin: 3px; /*separates the pads*/   
     box-shadow: 0 0 10px rgba(255, 255, 255, 0.3); /* Whitish box shadow */
    padding: 10px;
    box-sizing: border-box;/*allows the division to be surrounded by the tuneable border*/
    width: 298px;/*tunes the area inside the border*/
}
.heading_1, .heading_2, .heading_3,.heading_4,.heading_5,.heading_6 {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 25px;
    color: red;
}

button{
    padding: 12px;
    background-color:green;
    color: white;
}
.toCart{
    padding: 12px;
    background-color:green;
    color: white;
}
.paying{
    padding: 20px;
    background-color: green;
    color: white;
    position: relative;
    width: 25em;
}
.clear_pay{
    display: flex; 
    justify-content: center;
}
.pay{
    padding: 20px;
    background-color: green;
    color: white;
    position: relative;
}
button:hover{
    cursor: pointer;
    background-color: red;
}
img:hover{
    cursor: pointer;
}
#total-cost{
    color: white;
    position: relative;
    font-size: 23px;
}
.price{
    color: green;
    font-size: 23px;
}
.description{
    font-size: 15px;
    word-wrap: break-word;
}

.buy{
    display: none ;
}
select {
            width:20em;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
input[type="number"] {
            width:18.3em;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }       


</style>
</head>
<body>
    <header>
    <nav>
    <ul>
    <li ><a title="View home page"  href="home.php">HOME</a></li>
    <li><a title="Learn more about our services" href="about.php">ABOUT US</a></li>
    <li><a title="Contact our customer support team" href="contact.php">CONTACT US</a></li>
     <li ><a title="Shop items from our store " style=" color: red;" href="shop.html">SHOP</a></li>
     <li><a href="unconfirmedCart.php"><img src="images (4).png" alt="View Cart" height="30px" width="30px">CART</a></li>
     <li><a title="Register/Sign-In"  href="login.html"><img src="images (13).jpeg" alt="Register/Sign-In" height="30px" width="30px"></a></li>
    </ul>  
    </nav>
</header>

   


<div class="parent">
    <h2  id="dynamic-heading"></h2> 
    <div class="left">
       
        
         <h3 class="heading_1">Blouses</h3>
            <div class="box" id="box_1" >
               
                <div class="store_item">
                    <img src="images (14).jpeg" alt="cloth 1" height="270px" width="270px" ondblclick="toCart('Elegant Lace Blouse', 49.99)">
                    <p class="price">$49.99</p>
                    <p class="description">This elegant lace blouse is perfect for a special occasion. It's made from a luxurious fabric and features a flattering fit.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input  type="number" step="1" id="quantity" min="1" max="100" >
                        <button class="toCart" onclick="toCart('Elegant Lace Blouse', 49.99)">Add to Cart</button>
                    </div>
                </div>
                
                <div class="store_item">
                    <img src="images (15).jpeg" alt="cloth 2" height="270px" width="270px" ondblclick="toCart('Floral Print Chiffon Blouse', 39.99)">
                    <p class="price">$39.99</p>
                    <p class="description">This floral print chiffon blouse is perfect for a summer day. It's made from lightweight fabric and features a fun, eye-catching print.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input class="restrictedInput" type="number" id="quantity" min="1" max="100">
                        
                        <button class="toCart" onclick="toCart('Floral Print Chiffon Blouse', 39.99)">Add to Cart</button>
                    </div>
                </div>
                
                <div class="store_item">
                    <img src="images (16).jpeg" alt="cloth 3" height="270px" width="270px" ondblclick="toCart('Ruffled Sleeve Silk Blouse', 54.99)">
                    <p class="price">$54.99</p>
                    <p class="description">This ruffled sleeve silk blouse is perfect for a night out. It's made from a luxurious fabric and features a flattering fit.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input  step="1" class="restrictedInput" type="number" id="quantity" min="1" max="100">
                        
                       <button class="toCart" onclick="toCart('Ruffled Sleeve Silk Blouse', 54.99)">Add to Cart</button>
                    </div>
                </div>
                
                <div class="store_item">
                    <img src="images (17).jpeg" alt="cloth 4" height="270px" width="270px" ondblclick="toCart('Striped Bow Tie Blouse', 29.99)">
                    <p class="price">$29.99</p>
                    <p class="description">This striped bow tie blouse is perfect for the office or a casual day out. It's made from a wrinkle-resistant fabric and features a classic, timeless design.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input  step="1" type="number" id="quantity" min="1" max="100">
                    <button class="toCart" onclick="toCart('Striped Bow Tie Blouse', 29.99)">Add to Cart</button>
                    </div>
                </div>
                
                <div class="store_item">
                    <img src="images (18).jpeg" alt="cloth 5" height="270px" width="270px" ondblclick="toCart('Embroidered Linen Blouse', 44.99)">
                    <p class="price">$44.99</p>
                    <p class="description">This embroidered linen blouse is perfect for a summer day. It's made from lightweight fabric and features a beautiful, eye-catching embroidery.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                    <button class="toCart" onclick="toCart('Embroidered Linen Blouse', 44.99)">Add to Cart</button>
                    </div>
                </div>
                
                <div class="store_item">
                    <img src="images (19).jpeg" alt="cloth 6" height="270px" width="270px" ondblclick="toCart('Off-Shoulder Peasant Blouse', 49.99)">
                    <p class="price">$49.99</p>
                    <p class="description">This off-shoulder peasant blouse is perfect for a summer day. It's made from lightweight fabric and features a flowy, bohemian design.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                           </select>
                          <br>
                          Quantity:
                          <input type="number"  step="1" id="quantity" min="1" max="100">
                           <button class="toCart" onclick="toCart ('Off-Shoulder Peasant Blouse', 49.99)">Add to Cart</button>
                        </div>

                </div>
                
            </div>

          <br><br> <br>
      
        <h3 class="heading_2">Women's T-Shirts</h3>
            <div class="box" id="box_2">
                <div class="store_item">
                    <img src="images (20).jpeg" alt="cloth 7" height="270px" width="270px" ondblclick="toCart('Women T-Shirt with Ruffle Sleeves',25)">
                    <p class="price">$25</p>
                    <p class="description">This women's T-shirt with ruffle sleeves is perfect for a casual day out. It's made from soft, breathable fabric and features a flattering fit.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                    <button class="toCart" onclick="toCart('Women T-Shirt with Ruffle Sleeves',25)">Add to Cart</button>
                </div>

                </div>
                
                <div class="store_item">
                    <img src="images (21).jpeg" alt="cloth 8" height="270px" width="270px" ondblclick="toCart('Women T-Shirt with Floral Print',30)">
                    <p class="price">$30</p>
                    <p class="description">This women's T-shirt with floral print is perfect for a summer day. It's made from lightweight fabric and features a fun, eye-catching print.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                    <button class="toCart" onclick="toCart('Women T-Shirt with Floral Print',30)">Add to Cart</button>
                </div>

                </div>
                
                <div class="store_item">
                    <img src="images (22).jpeg" alt="cloth 9" height="270px" width="270px" ondblclick="toCart('Women T-Shirt with Button-Down Collar',40)">
                    <p class="price">$40</p>
                    <p class="description">This women's T-shirt with button-down collar is perfect for the office or a night out. It's made from a wrinkle-resistant fabric and features a classic, timeless design.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                    <button class="toCart" onclick="toCart('Women T-Shirt with Button-Down Collar',40)">Add to Cart</button>
                </div>

                </div>
                
                <div class="store_item">
                    <img src="images (23).jpeg" alt="cloth 10" height="270px" width="270px" ondblclick="toCart('Women T-Shirt with Sweetheart Neckline',50)">
                    <p class="price">$50</p>
                    <p class="description">This women's T-shirt with sweetheart neckline is perfect for a date night or a special occasion. It's made from a luxurious fabric and features a flattering fit.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                    <button class="toCart" onclick="toCart('Women T-Shirt with Sweetheart Neckline',50)">Add to Cart</button>
                </div>

                </div>
                
                <div class="store_item">
                    <img src="images (24).jpeg" alt="cloth 11" height="270px" width="270px" ondblclick="toCart('Women T-Shirt with Halterneck',60)">
                    <p class="price">$60</p>
                    <p class="description">This women's T-shirt with halterneck is perfect for a hot summer day. It's made from a breathable fabric and features a stylish, eye-catching design.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                    <button class="toCart" onclick="toCart('Women T-Shirt with Halterneck',60)">Add to Cart</button>
                </div>

                </div>
                
                <div class="store_item">
                    <img src="images (25).jpeg" alt="cloth 12" height="270px" width="270px" ondblclick="toCart('Women T-Shirt with Off-the-Shoulder Neckline',70)">
                    <p class="price">$70</p>
                    <p class="description">This women's T-shirt with off-the-shoulder neckline is perfect for a night out. It's made from a luxurious fabric and features a sexy, glamorous design.</p>
                    <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                    <button class="toCart" onclick="toCart('Women T-Shirt with Off-the-Shoulder Neckline',70)">Add to Cart</button>
                </div>
            </div>
  
            </div>
            <br><br> <br>
      
        <h3 class="heading_3">Men's T-Shirts</h3>
            <div class="box" id="box_3">
                <div class="store_item">
                   <img src="images (26).jpeg" alt="cloth 13" height="270px" width="270px" ondblclick="toCart('Men T-Shirt with V-Neck', 25)">
                   <p class="price">$25</p>
                   <p class="description">This men's T-shirt with V-neck is perfect for a casual day out. It's made from soft, breathable fabric and features a flattering fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Men T-Shirt with V-Neck', 25)">Add to Cart</button>
                </div>

               </div>
            
                <div class="store_item">
                   <img src="images (27).jpeg" alt="cloth 14" height="270px" width="270px" ondblclick="toCart('Men T-Shirt with Short Sleeves', 30)">
                   <p class="price">$30</p>
                   <p class="description">This men's T-shirt with short sleeves is perfect for a summer day. It's made from lightweight fabric and features a fun, eye-catching print.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Men T-Shirt with Short Sleeves', 30)">Add to Cart</button>
                </div>

                </div>
            
                <div class="store_item">
                   <img src="images (28).jpeg" alt="cloth 15" height="270px" width="270px" ondblclick="toCart('Men T-Shirt with Crew Neck', 40)">
                   <p class="price">$40</p>
                   <p class="description">This men's T-shirt with crew neck is perfect for the office or a night out. It's made from a wrinkle-resistant fabric and features a classic, timeless design.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Men T-Shirt with Crew Neck', 40)">Add to Cart</button>
                </div>

                </div>
            
                <div class="store_item">
                  <img src="images (29).jpeg" alt="cloth 16" height="270px" width="270px"  ondblclick="toCart('Men T-Shirt with Pocket', 50)">
                  <p class="price">$50</p>
                  <p class="description">This men's T-shirt with pocket is perfect for a casual day out. It's made from soft, breathable fabric and features a convenient pocket.</p>
                  <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                  <button class="toCart" onclick="toCart('Men T-Shirt with Pocket', 50)">Add to Cart</button>
                </div>

                </div>
            
                <div class="store_item">
                   <img src="images (30).jpeg" alt="cloth 17" height="270px" width="270px" ondblclick="toCart('Men T-Shirt with Long Sleeves', 60)">
                   <p class="price">$60</p>
                   <p class="description">This men's T-shirt with long sleeves is perfect for a cold day. It's made from a warm, cozy fabric and features a flattering fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Men T-Shirt with Long Sleeves', 60)">Add to Cart</button>
                </div>

                </div>
            
                <div class="store_item">
                   <img src="images (31).jpeg" alt="cloth 18" height="270px" width="270px" ondblclick="toCart('Men T-Shirt with Graphic Print', 70)">
                   <p class="price">$70</p>
                   <p class="description">This men's T-shirt with graphic print is perfect for a night out. It's made from a soft, breathable fabric and features a unique, eye-catching print.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Men T-Shirt with Graphic Print', 70)">Add to Cart</button>
                </div>
            </div>

            </div>
            <br><br> <br>
      
        <h3 class="heading_4">Party Dresses for Women</h3>
            <div class="box" id="box_4">
                <div class="store_item">
                   <img src="images (32).jpeg" alt="cloth 19" height="270px" width="270px" ondblclick="toCart('Sequined Party Dress', 75)">
                   <p class="price">$75</p>
                   <p class="description">This sequined party dress is perfect for a night out. It's made from a luxurious fabric and features a flattering fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Sequined Party Dress', 75)">Add to Cart</button>
                </div>

                </div>
            
                <div class="store_item">
                   <img src="images (33).jpeg" alt="cloth 20" height="270px" width="270px" ondblclick="toCart('Floral Print Party Dress', 65)">
                   <p class="price">$65</p>
                   <p class="description">This floral print party dress is perfect for a summer party. It's made from lightweight fabric and features a fun, eye-catching print.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Floral Print Party Dress', 65)">Add to Cart</button>
                </div>

                </div>
            
                <div class="store_item">
                   <img src="images (34).jpeg" alt="cloth 21" height="270px" width="270px" ondblclick="toCart('Satin Slip Dress', 55)">
                   <p class="price">$55</p>
                   <p class="description">This satin slip dress is perfect for a formal event. It's made from a luxurious fabric and features a flattering fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Satin Slip Dress', 55)">Add to Cart</button>
                </div>
                </div>

                <div class="store_item">
                   <img src="images (35).jpeg" alt="cloth 22" height="270px" width="270px" ondblclick="toCart('Bodycon Party Dress', 45)">
                   <p class="price">$45</p>
                   <p class="description">This bodycon party dress is perfect for a night out. It's made from a form-fitting fabric and features a sexy, glamorous design.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart ('Bodycon Party Dress', 45)">Add to Cart</button>
                </div>
            </div>

                <div class="store_item">
                   <img src="images (36).jpeg" alt="cloth 23" height="270px" width="270px" ondblclick="toCart('Maxi Party Dress', 35)">
                   <p class="price">$35</p>
                   <p class="description">This maxi party dress is perfect for a summer party. It's made from lightweight fabric and features a flowy, bohemian design.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Maxi Party Dress', 35)">Add to Cart</button>
                </div>
            </div>

                <div class="store_item">
                   <img src="images (37).jpeg" alt="cloth 24" height="270px" width="270px" ondblclick="toCart('Short Party Dress', 25)">
                   <p class="price">$25</p>
                   <p class="description">This short party dress is perfect for a casual event. It's made from a comfortable fabric and features a flattering fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Short Party Dress', 25)">Add to Cart</button>
                </div>
            </div>
        </div>

        <br><br> <br>
        <h3 class="heading_5">Party Dresses for Men</h3>
            <div class="box" id="box_5">
                <div class="store_item">
                   <img src="images (44).jpeg" alt="cloth 31" height="270px" width="270px" ondblclick="toCart('Smoky Grey Tuxedo', 250)">
                   <p class="price">$250</p>
                   <p class="description">This smoky grey tuxedo is perfect for a black tie event. It's made from a luxurious fabric and features a classic, timeless design.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                  <button class="toCart" onclick="toCart('Smoky Grey Tuxedo', 250)">Add to Cart</button>
                </div>

                </div>
            
                <div class="store_item">
                   <img src="images (45).jpeg" alt="cloth 32" height="270px" width="270px" ondblclick="toCart('Black Suit', 200)">
                   <p class="price">$200</p>
                   <p class="description">This black suit is perfect for a formal event. It's made from a durable fabric and features a flattering fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Black Suit', 200)">Add to Cart</button>
                </div>
            </div>

                <div class="store_item">
                   <img src="images (46).jpeg" alt="cloth 33" height="270px" width="270px" ondblclick="toCart('Navy Blue Blazer', 150)">
                   <p class="price">$150</p>
                   <p class="description">This navy blue blazer is perfect for a formal event or a night out. It's made from a durable fabric and features a flattering fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                         Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Navy Blue Blazer', 150)">Add to Cart</button>
                </div>
            </div>

                <div class="store_item">
                   <img src="images (47).jpeg" alt="cloth 34" height="270px" width="270px" ondblclick="toCart('White Button-Up Shirt', 100)">
                   <p class="price">$100</p>
                   <p class="description">This white button-up shirt is perfect for any occasion. It's made from a soft, breathable fabric and features a classic, timeless design.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('White Button-Up Shirt', 100)">Add to Cart</button>
                </div>
            </div>

                <div class="store_item">
                   <img src="images (48).jpeg" alt="cloth 35" height="270px" width="270px" ondblclick="toCart('Black Jeans', 75)">
                   <p class="price">$75</p>
                   <p class="description">These black jeans are perfect for everyday wear. They're made from a durable fabric and feature a flattering fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Black Jeans', 75)">Add to Cart</button>
                </div>
            </div>

                <div class="store_item">
                   <img src="images (49).jpeg" alt="cloth 36" height="270px" width="270px" ondblclick="toCart('Blue Jeans', 65)">
                   <p class="price">$65</p>
                   <p class="description">These blue jeans are perfect for a casual day out. They're made from a comfortable fabric and feature a relaxed fit.</p>
                   <button class="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Blue Jeans', 65)">Add to Cart</button>
                </div>
            </div>
        </div>
        <br><br> <br>
        <h3 class="heading_6">Men's Jeans</h3>
            <div class="box" id="box_6">
                <div class="store_item">
                   <img src="images (38).jpeg" alt="cloth 25" height="270px" width="270px" ondblclick="toCart('Black Denim Jeans', 125)">
                   <p class="price">$125</p>
                   <p class="description">These black denim jeans are perfect for a night out. They're made from a durable fabric and feature a flattering fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Black Denim Jeans', 125)">Add to Cart</button>
                </div>

                </div>
                <div class="store_item">
                   <img src="images (39).jpeg" alt="cloth 26" height="270px" width="270px" ondblclick="toCart('Blue Denim Jeans', 100)">
                   <p class="price">$100</p>
                   <p class="description">These blue denim jeans are perfect for everyday wear. They're made from a comfortable fabric and feature a relaxed fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Blue Denim Jeans', 100)">Add to Cart</button>
                </div>
            </div>

            
                <div class="store_item">
                   <img src="images (40).jpeg" alt="cloth 27" height="270px" width="270px" ondblclick="toCart('Distressed Denim   Jeans', 75)">
                   <p class="price">$75</p>
                   <p class="description">These distressed denim jeans are perfect for a casual day out. They're made from a comfortable fabric and feature a ripped look.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Distressed Denim Jeans', 75)">Add to Cart</button>
                </div>
            </div>

            
                <div class="store_item">
                   <img src="images (41).jpeg" alt="cloth 28" height="270px" width="270px" ondblclick="toCart('Light Wash Denim Jeans', 65)">
                   <p class="price">$65</p>
                   <p class="description">These light wash denim jeans are perfect for a summer day. They're made from a breathable fabric and feature a relaxed fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number" step="1"  id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Light Wash Denim Jeans', 65)">Add to Cart</button>
                </div>
            </div>

            
                <div class="store_item">
                   <img src="images (42).jpeg" alt="cloth 29" height="270px" width="270px" ondblclick="toCart('Ripped Skinny Jeans', 55)">
                   <p class="price">$55</p>
                   <p class="description">These ripped skinny jeans are perfect for a night out. They're made from a stretchy fabric and feature a figure-hugging fit.</p>
                   <button id="buy_button" onclick="ariseCart()">BUY</button>
                    <br>
                    <div class="buy" >
                        Size:
                        <select name="size" id="size">
                            <option value="small">Small (S)</option>
                            <option value="medium">Medium (M)</option>
                            <option value="large">Large (L)</option>
                            <option value="extra large">Extra Large (XL)</option>
                            <option value="extra extra large">Extra Extra Large (XXL)</option>
                        </select>
                        <br>
                        Quantity:
                        <input type="number"  step="1" id="quantity" min="1" max="100">
                   <button class="toCart" onclick="toCart('Ripped Skinny Jeans', 55)">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

</div>
<footer style="text-align: center; margin-top: 20px;font-style: italic;">
                <p>&copy; 2023 Dely Stores. All rights reserved. Trademarks and brands are the property of their respective owners.</p>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    
document.addEventListener("DOMContentLoaded", function () {
    // Function to parse the query string and get the category parameter
    function getQueryVariable(variable) {
        const query = window.location.search.substring(1);
        const vars = query.split('&');
        for (let i = 0; i < vars.length; i++) {
            const pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) === variable) {
                return decodeURIComponent(pair[1]);
            }
        }
        return null;
    }

    // Get the category from the query parameter
    const category = getQueryVariable('category');

    if (category) {
        // If a category is specified in the query parameter, hide all "box" divs by default
        const allBoxes = document.querySelectorAll('.box,.heading_1, .heading_2, .heading_3,.heading_4,.heading_5,.heading_6');
        allBoxes.forEach(box => {
            box.style.display = 'none';
        });

        // Show the "box" div corresponding to the category
        const selectedBox = document.getElementById(category);
        if (selectedBox) {
            selectedBox.style.display = 'flex';
            selectedBox.style.padding = '0';
            
        }
    }
});


function ariseCart() {
    // Get the parent container of the clicked "BUY" button
    var storeItem = event.target.parentElement;

    // Hide the "BUY" button
    var buyButton = storeItem.querySelector('button[id="buy_button"]');
    buyButton.style.display = 'none';

    // Show the items in the "buy" div
    var buyDiv = storeItem.querySelector('.buy');
    buyDiv.style.display = 'block';
}


function toCart(itemName, price) {
    // Get quantity from the input field
    var quantityInput = event.target.parentElement.querySelector('input[type="number"]');
    var quantity = parseFloat(quantityInput.value); // Use parseFloat to allow decimal input

 

  // Check if quantity is valid
  if (isNaN(quantity) || quantity <= 0 || quantity > 100 ||quantity % 1 !== 0) {
    alert("Please enter a valid integer quantity between 1 and 100.");
    return;
}

    // Get selected size from the dropdown
    var sizeSelect = event.target.parentElement.querySelector('select');
    var size = sizeSelect.options[sizeSelect.selectedIndex].value;



    // Create an object to hold the item information
    var item = {
        itemName: itemName,
        price: price,
        size: size,
        quantity: quantity
    };

    // Send the item data to the server using a POST request
    $.post("addToCart.php", { item: item }, function(response) {
        // Handle the server's response here if needed
        if (response === "success") {
            // Cart item added successfully
            alert("Item added to cart!");
        } else {
            // Handle any errors from the server
            alert("Error adding item to cart.");
        }
    });
}



    const dynamicHeading = document.getElementById('dynamic-heading');
        const statements = [
            "Welcome to Dely Stores dear Customer!",
            "Welcome to Explore our stylistic designs ",
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