<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/reviews.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=1">
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
        <h1>Reviews</h1>
    </header>

    <section class="review-carousel">
        <div class="card card1">
            <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <div class="review">
                <p>" Great quality and fast delivery. I will definitely buy again. "</p>
            </div>
            <div class="user-info">
                <img class="user-picture" src="images/users-profile/Jane.webp" alt="user-profile">
                <p>Jane Doe</p>
            </div>
        </div>

        <div class="card card2">
            <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <div class="review">
                <p>" I love the quality. I will definitely recommend this store. "</p>
            </div>
            <div class="user-info">
                <img class="user-picture" src="images/users-profile/John.webp" alt="user-profile">
                <p>John Michaels</p>
            </div>
        </div>

        <div class="card card3">
            <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <div class="review">
                <p>" The blue sage I purchased are amazing! Highly recommend!"</p>
            </div>
            <div class="user-info">
                <img class="user-picture" src="images/users-profile/Jodi.webp" alt="user-profile">
                <p>Jodi Cruz</p>
            </div>
        </div>
    </section>

        
</body>
</html>