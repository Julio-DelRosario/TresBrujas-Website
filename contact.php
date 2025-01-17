<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/contact.css?v=<?php echo time(); ?>">
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
                <li><a href="catalog.php" >Catalog</a></li>
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
        <h1>Contact Us</h1>
        <p>We’d love to hear from you. Send us your queries, concerns, 
            and other messages using the form below and we’ll try to get back to you as when we can.</p>
    </header>

    <section class="form">
        <div class="form-container">
            <form action="">
                <div class="form-name">
                    <div>
                        <label for="first-name">First Name:</label>
                        <input type="text" class="contact-form" id="first-name" name="first-name" required>
                    </div>
                    <div>
                        <label for="last-name">Last Name:</label>
                        <input type="text" class="contact-form" id="last-name" name="last-name" required>
                    </div>
                </div>
                
                <label for="email">Email:</label>
                <input type="email" class="contact-form email" id="email" name="email" required>
                <label for="email-subject:">Email Subject:</label>
                <input type="text" class="contact-form email" id="email-subject" name="email-subject" required>
    
                <label for="message">Message:</label>
                <textarea class="contact-form" id="message" name="message" required></textarea>
    
                <button class="contact-form" id="submit-button">Submit</button>
            </form>
        </div>  
    </section>
</body>
</html>