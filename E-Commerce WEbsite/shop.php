<?php include 'connect.php';
session_start(); 
  
// Start the session 
// Check if the add to cart button is clicked 
if (isset($_POST["add_to_cart"])) { 
    
    // Get the product ID from the form 
    $product_id = $_POST["product_id"]; 
    
    // Get the product quantity from the form 
    $product_quantity = $_POST["product_quantity"]; 
  
    // Initialize the cart session variable 
    // if it does not exist 
    if (!isset($_SESSION["cart"])) { 
        $_SESSION["cart"] = []; 
        header("location:cart.php"); 
    } 
  
    // Add the product and quantity to the cart 
    $_SESSION["cart"][$product_id] = $product_quantity; 
    header("location:cart.php"); 
} 

?> 
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to our website</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    <header>
        <h1><i>Welcome</i>
            <?php
            $user = $_SESSION["user"];
            echo $user["name"];
            ?> <i>to our website</i>
        </h1>
    </header>
    <nav>
        <ul>
            <li><a href="shop.html">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Products</h2>
            <ul>
                <li class="product">
                    <h3>Bags</h3>
                    <img src="https://rukminim1.flixcart.com/image/1664/1664/backpack/x/7/6/bpbeat06blu-skybags-backpack-original-imadkg45rtbcwzvt.jpeg?q=90" alt="Product 1">
                    <p>Bag with 2 Extra pockets</p>
                    <p><span>Rs.650</span></p>
                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="1">
                        <label for="product1_quantity">Quantity:</label>
                        <input type="number" id="product1_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </li>
                <li class="product">
                    <h3>T-Shirt</h3>
                    <img src="https://i.etsystatic.com/12355681/r/il/1a260b/1587523210/il_fullxfull.1587523210_t3ob.jpg" alt="Product 2">
                    <p>100% cotton t-shirts</p>
                    <p><span>Rs.200</span></p>
                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="2">
                        <label for="product2_quantity">Quantity:</label>
                        <input type="number" id="product2_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </li>
                <li class="product">
                    <h3>Hoodies</h3>
                    <img src="https://s3-eu-west-1.amazonaws.com/images.linnlive.com/4026ef0cc7c4844b9d335306aa30fe5c/6c4c5311-ee72-4b46-a734-0c4887bbeb07.jpg" alt="Product 3">
                    <p>Black Color Stylish Hoodie</p>
                    <p><span>Rs.1000</span></p>
                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="3">
                        <label for="product3_quantity">Quantity:</label>
                        <input type="number" id="product3_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </li>
                <li class="product">
                    <h3>Caps</h3>
                    <img src="https://m.media-amazon.com/images/I/5176PrnrJFL._AC_UF894,1000_QL80_.jpg" alt="Product 4">
                    <p>Stylish cap</p>
                    <p><span>Rs.100</span></p>
                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="4">
                        <label for="product4_quantity">Quantity:</label>
                        <input type="number" id="product4_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </li>
                <li class="product">
                    <h3>Shirts</h3>
                    <img src="https://th.bing.com/th/id/OIP.O3Kd9pCHrSo94vlB4w61KAHaKM?pid=ImgDet&rs=1" alt="Product 5">
                    <p>Stylish Shirt</p>
                    <p><span>Rs.500</span></p>
                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="5">
                        <label for="product5_quantity">Quantity:</label>
                        <input type="number" id="product5_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </li>
                <li class="product">
                    <h3>Shoes</h3>
                    <img src="https://assetscdn1.paytm.com/images/catalog/product/F/FO/FOONIKE-RUNALLDSMAR26297ED053FA/1563333298007_0..jpg" alt="Product 6">
                    <p>Stylish Shoes</p>
                    <p><span>Rs.2000</span></p>
                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="6">
                        <label for="product6_quantity">Quantity:</label>
                        <input type="number" id="product6_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </li>
            </ul>
        </section>
    </main>
    <script src="shop.php"></script>
</body>
</html>