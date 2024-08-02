<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Shopping Cart</title> 
  
</head> 
<style> 
    body { 
  margin: 0; 
  padding: 0; 
  background-color: #f1fbfb; 
  color: #171b17; 
  font-family: Arial, sans-serif; 
  background-image: url('bg.jpg');
  background-size: cover;
  background-position: center;
} 
nav { 
    background-color: #38cbcb; 
  padding: 5px; 
} 
    table { 
        border-collapse: collapse; 
        width: 100%; 
    } 
    th, td { 
        text-align: center; 
        padding: 8px; 
        background-color: #094242; 
  color: #bccebc;
    } 
    th { 
        background-color: #094242; 
  color: #bccebc; 
    } 
    tr:nth-child(even) { 
        background-color: #f2f2f2; 
    } 
    form{
  background-color: #333; 
  color: #fff; 
  border: none; 
  padding: 10px; 
  cursor: pointer; 
}
    
button.button {
  background-color: #38cbcb;
  color: #fff; 
  padding: 10px 20px;
  cursor: pointer;
  font-weight: bold;
  border: none;
  border-radius: 5px;
}

button.button:hover {
  background-color: #2f6b21;
}

      
      
</style> 
  
<body> 
    <header> 
        <h1><<?php include 'connect.php'; session_start(); 
$user = $_SESSION['user']; 
echo $user['name']; ?> Shopping Cart</h1> 
    </header> 
  
    <nav> 
        <ul> 
            <li> 
                <a href="shop.html">Home</a> 
            </li> 
            <li> 
                <a href="shop.html">Products</a> 
            </li> 
            <li> 
                <a href= 
"mailto:akshatv2222@gmail.com">Contact Us</a> 
            </li> 
            <li> 
                <a href="cart.php">Cart</a> 
            </li> 
        </ul> 
    </nav> 
  
    <main> 
        <section> 
            <table border="1"> 
                <tr> 
                    <th>Product Name </th> 
                    <th>Quantity </th> 
                    <th>Price </th> 
                    <th>Total </th> 
                </tr> 
                <?php 
                $servername = "localhost"; 
                $username = "root"; 
                $password = ""; 
                $dbname = "akshat"; 
  
                // Create connection 
                $conn =  
                    new mysqli($servername, $username, $password, $dbname); 
  
                // Check connection 
                if ($conn->connect_error) { 
                    die("Connection failed: " . $conn->connect_error); 
                } 
  
                $total = 0; 
  
                // Loop through items in cart and display in table 
                foreach ($_SESSION['cart'] as $product_id => $quantity) { 
                    $sql = "SELECT * FROM products WHERE id = $product_id"; 
                    $result = $conn->query($sql); 
  
                    if ($result->num_rows > 0) { 
                        $row = $result->fetch_assoc(); 
                        $name = $row['name']; 
                        $price = $row['price']; 
                        $item_total = (int)$quantity * (float)$price;
                        $total += $item_total; 
  
                        echo "<tr>"; 
                        echo "<td>$name</td>"; 
                        echo "<td>$quantity</td>"; 
                        echo "<td>Rs. $price </td>"; 
                        echo "<td>Rs. $item_total </td>"; 
                        echo "</tr>"; 
                    } 
                } 
                // Display total 
                echo "<tr>"; 
                echo "<td colspan='3'>Total:</td>"; 
                echo "<td>Rs. $total </td>"; 
                echo "</tr>"; 
                ?> 
            </table> 
            <form action="checkout.php" method="post">
    <input type="submit" value="Checkout" class="button" />
</form>
        </section> 
    </main> 
</body> 
  
</html>