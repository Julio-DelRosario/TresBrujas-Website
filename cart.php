<?php
    $host = "localhost";
    $dbname = "tresbrujas";
    $username = "root";
    $password = "";

    $conn = new mysqli($host, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error){
        die("Connection failed:".$conn -> connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $product_name = $_POST['productName'];
        $product_price = $_POST['productPrice'];
        $product_image = $_POST['productImage'];
    }
    $result = $conn->query("SELECT productName, productPrice, productImage FROM products");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time(); ?>">
    <title>Tres Brujas PH</title>
</head>
<body>
    <nav>
        <div class="nav-brand">
            <img class="nav-brand-logo" src="images/Logo.webp" alt="tres_brujas">
            <a class="nav-brand-name" href="index.php">TRES BRUJAS™</a>
        </div>

        <div class="nav-info">
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="catalog.php">Catalog</a></li>
                <li><a href="contact.php" >Contact Us</a></li>
                <li><a href="reviews.php">Reviews</a></li>
            </ul>
        </div>

        <div class="nav-search">
            <form action="">
                <input class="search-bar" type="text" placeholder="search">
            </form>

            <div class="nav-cart">
                <a href="cart.php">
                    <img id="cart-icon" src="images/shopping-cart.svg" alt="cart">
                </a>
            </div>
        </div>
    </nav>

    <header>
        <h1>Shopping Cart</h1>
    </header>

    <div class="cart-container">
        <div class="cart">
            <div class="cart-items">
                <table>
                    <tr>
                        <th colspan="2" class="product-header">Product</th>
                        <th class="quantity-header">Quantity</th>
                        <th class="total">Total</th>
                    </tr>

                    <?php
                        while($row = $result->fetch_assoc()){
                            $imageData = base64_encode($row["productImage"]);
                            echo 
                            "<tr>
                                <td class='product'><img class='product-image' src=data:image.webp;base64,".$imageData." alt=".$row["productName"]."></td>
                                <td>
                                    <p>" .$row["productName"]."</p>
                                    <p>$".$row["productPrice"]."</p>
                                </td>
                                <td class='quantity'>
                                    <div class='btn-container'>
                                            <button class='quantity-btn' id='decrement'>-</button>
                                            <span>1</span>
                                        <button class='quantity-btn' id='increment'>+</button>
                                    </div>
                                </td>
                                <td class='total'>$<span>".$row["productPrice"].".00</span></td>
                            </tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    
    

        <div class="order-summary">
            <div class="cart-total">
                <h2>Order Summary</h2>
                <p>Subtotal: $<span id="subtotal">0.00</span></p>
                <p>Shipping: $<span id="shipping">0.00</span></p>
                <p>Total: $<span id="total">0.00</span></p>
            </div>
            <div class="cart-checkout">
                <button id="checkout-btn">Proceed to checkout</button>
            </div>
        </div>
    </div>
        
</body>
</html>


<!-- Sample product 
<tr>
    <td class="product">
        <img class="product-image" src="images/products/Blue_Sage.webp" alt="Blue_sage">
    </td>
    <td>
        <p>Blue Sage</p>
        <p>$100.00</p>
    </td>
    <td class="quantity">
        <div class="btn-container">
            <button class="quantity-btn" id="decrement">-</button>
            <span>1</span>
            <button class="quantity-btn" id="increment">+</button>
        </div>
    </td>
    <td class="total">$<span>100.00</span></td>
</tr> -->