<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalog.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time(); ?>">
    <script defer src="js/navbar.js"></script>
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
        <h1>TRES BRUJAS PH</h1>
        <p>Cleanse | Purify | Manifest</p>
        <p>Smoke Cleansing Herbs & Incense Shop</p>
    </header>

    <section id="catalog">
        <h2>Our Products</h2>
        <div class="product-grid" id="product-grid">
            
        </div>
    </section>

    <script src="js/products.js"></script>
</body>
</html>

<!-- The products is generated dynamically using JavaScript
<div class="product" id="products">
    <button class="view-product" id="view-button" onclick="viewProduct()">
        <img src="images/products/Whitesage_LV_PS.webp" alt="White Sage with Lavender and Palo Santo">
        <h3>White Sage with Lavender and Palo Santo</h3>
        <p>$500</p>
    </button>
    <button class="add-to-cart" onclick="addProduct(white_sage)">Add to Cart</button>
</div>
<div class="product">
    <button class="view-product" id="view-button" onclick="viewProduct()">
        <img src="images/products/Blue_Sage.webp" alt="Blue Sage">
        <h3>Blue Sage</h3>
        <p>$300</p>
    </button>
    <button class="add-to-cart" onclick="addProduct(blue_sage)">Add to Cart</button>
</div>
<div class="product">
    <button class="view-product" id="view-button" onclick="viewProduct()">
        <img src="images/products/Cedar.webp" alt="Cedar">
        <h3>Cedar</h3>
        <p>$300</p>
    </button>
    <button class="add-to-cart" onclick="addProduct(cedar)">Add to Cart</button>
</div>
<div class="product">
    <button class="view-product" id="view-button" onclick="viewProduct()">
        <img src="images/products/Dragons_Blood.webp" alt="Dragon's Blood Sage">
        <h3>Dragon's Blood Sage</h3>
        <p>$400</p>
    </button>
    <button class="add-to-cart" onclick="addProduct(dragons_blood)">Add to Cart</button>
</div>
<div class="product">
    <button class="view-product" id="view-button" onclick="viewProduct()">
        <img src="images/products/Mugwort.webp" alt="Mugwort">
        <h3>Mugwort</h3>
        <p>$400</p>
    </button>
    <button class="add-to-cart" onclick="addProduct(mugwort)">Add to Cart</button>
</div>
<div class="product">
    <button class="view-product" id="view-button" onclick="viewProduct()">
        <img src="images/products/Yerba_Santa.webp" alt="Yerba Santa">
        <h3>Yerba Santa</h3>
        <p>$400</p>
    </button>
    <button class="add-to-cart" onclick="addProduct(yerba_santa)">Add to Cart</button>
</div> -->