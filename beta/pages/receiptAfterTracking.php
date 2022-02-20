<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Happy Sunshine | Receipt</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/normalize.css">
    </head>
    <body>
        <nav id="mobile-nav">
            <header class="header home-header">
                <div id="x" class="x-menu">
                    <img src="../media/images/x.svg">
                </div>
                <div class="hs-logo">
                    <a href="../index.html">
                        <img src="../media/images/happy-sunshine-logo.svg" alt="Happy Sunshine Logo">
                    </a>
                </div>
                <div class="cart">
                    <a href="cartWithNothing.html">
                        <img src="../media/images/happy-sunshine-cart.svg" alt="Happy Sunshine Logo">
                    </a>
                </div>
            </header>
            <div id="nav-links">
                <a href="../index.html">Home</a>
                <a href="menu.html">Menu</a>
                <a href="favoriteOrders.html">Favorites</a>
                <a href="recentOrders.html">Recents</a>
                <a href="#">Profile</a>
            </div>
        </nav>
        <header class="header">
            <div id="header-menu" class="hamburger-menu">
                <div class="hamburger-rectangle"></div>
                <div class="hamburger-rectangle"></div>
                <div class="hamburger-rectangle"></div>
            </div>
            <div class="hs-logo">
                <a href="../index.html">
                    <img src="../media/images/happy-sunshine-logo.svg" alt="Happy Sunshine Logo">
                </a>
            </div>
            <div class="cart">
                <a href="cartWithNothing.html">
                    <img src="../media/images/happy-sunshine-cart.svg" alt="Happy Sunshine Logo">
                </a>
            </div>
        </header>
        <section id="cart-info">
            <div class="menu-header flex-row">
                <div class="col-1-3">
                    <a href="../index.html" class="flex-row">
                        <img src="../media/images/general-menu-arrow.svg" alt="Menu Arrow">
                        <p>Home</p>
                    </a>
                </div>
                <div class="col-1-3">
                    <h2>Receipt</h2>
                </div>
                <div class="col-1-3"></div>
            </div>
            <div id="thanks-for-order">
                <p>Thank you for ordering! Show this screen when picking up your order at <a href="#">33rd and Arch St. <img src="../media/images/happy-sunshine-link.svg"></a></p>
            </div>
            <div class="cart-items flex-col">
                <div class="cart-food-item flex-row-wrap">
                    <img src="../media/images/small-breakfast-sandwich.png" alt="Small Breakfast Sandwich">
                    <div class="cart-food-item-info flex-col">
                        <h5>Breakfast Sandwich</h5>
                        <p>Bagel, Bacon, Egg, Cheese, Ketchup, Salt, Pepper</p>
                        <p>Price: <span>$5.00</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="cart-footer" class="receipt-footer">
            <div class="flex-col">
                <p>Name: <span>John Smith</span></p>
                <p>Pick-up time: <span>1:15pm</span></p>
                <p>Total: <span>$5.00 Cash Only</span></p>
                <a href="../index.html" class="large-yellow-btn">Back to Home</a>
            </div>
        </section>
        <script src="../scripts/script.js" async defer></script>
    </body>
</html>