<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
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
                <li><a href="contact.php">Contact Us</a></li>
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
        <h2>Cleanse | Purify | Manifest</h2>
        <p>
            Welcome to Tres Brujas PH, your trusted companion in mindful living and spiritual well-being. Inspired by the ancient practices of cleansing, healing, and connection, 
            Tres Brujas PH is your haven for premium smoke cleansing herbs, handcrafted incense, and curated tools for holistic rituals.
            Each product is thoughtfully selected or crafted with love, ensuring quality, sustainability, and respect for the traditions that guide us.🌿✨
        </p>
    </header>

    <section class="blue-sage">
        <img src="images/products/Blue_Sage.webp" alt="Blue Sage">
        <div class="text">
            <h1>Blue Sage</h1>
            <p class="description">Herbaceous and floral scent  
                <br> Attracts: • Money • Abundance • Prosperity
            </p>
            <a href="catalog.html" class="btn">Shop Fragrance</a>
        </div>
    </section>

    <section class="yerba-santa">
        <img src="images/products/Yerba_Santa.webp" alt="Yerba Santa">
        <div class="text">
            <h1>Yerba Santa</h1>
            <p class="description">Removes negative energy  
                <br> Helps recover from grief, sadness, shyness, broken heart
            </p>
            <a href="catalog.html" class="btn">Shop Fragrance</a>
        </div>
    </section>

    <section class="dragons-blood">
        <img src="images/products/Dragons_Blood.webp" alt="Dragons Blood">
        <div class="text">
            <h1>Mountain Sage with Dragon's Blood</h1>
            <p class="description">Cleansing and removing negative energy  
                <br> Said to cure impotency & enhances health, virility, and courage
            </p>
            <a href="catalog.html" class="btn">Shop Fragrance</a>
        </div>
    </section>

</body>
</html>