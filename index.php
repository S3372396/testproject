<?php 
$pageTitle = "Home Page"; // Custom title for this page
require 'header_file.php'; 
?>
    <main>
        <section class="container">
            <div class="title-container">
                <h2>Quiet Network Shop</h2>
            </div>
            <div class="search-container">
                <input type="text" placeholder="search...">
            </div>
            <div class="product-grid">

                <!--card 1 -->
                <div class="product-card">
                    <div class="product-image-box">
                        <img src="../STATIC/zine1.png" alt="Paperback zine with terrace houses on the cover.">
                    </div>
                    <div class="product-tile-container">
                        <h3>Sanctuaries of the Inner North</h3>
                    </div>
                    <div class="product-info">
                        <span class="product-price">$14.95</span>
                        <button class="buy-button">
                            <a href="../CART/shop_product_inner_north.html">Buy</a></li>
                        </button>
                    </div>
                </div>

                <!--card 2 -->
                <div class="product-card">
                    <div class="product-image-box">
                        <img src="../STATIC/zine2.png" alt="Paperback zine with leaves and a building on the cover.">
                    </div>
                    <div class="product-tile-container">
                        <h3>Hidden Gardens and Refuges</h3>
                    </div>
                    <div class="product-info">
                        <span class="product-price">$14.95</span>
                        <button class="buy-button">
                            <a href="../CART/shop_product_gardens.html">Buy</a></li>
                        </button>
                    </div>
                </div>

                <!--card 3-->
                <div class="product-card">
                    <div class="product-image-box">
                        <img src="../STATIC/zine3.png" alt="Paperback zine with icons of melbourne on the cover.">
                    </div>
                    <div class="product-tile-container">
                        <h3>The Quiet Southside</h3>
                    </div>
                    <div class="product-info">
                        <span class="product-price">$14.95</span>
                        <button class="buy-button">
                            <a href="../CART/shop_product_southside.html">Buy</a></li>
                        </button>
                    </div>
                </div>

                <!--card 4 -->
                <div class="product-card">
                    <div class="product-image-box">
                        <img src="../STATIC/lanyard.jpg" alt="Green lanyard with yellow sunflowers laid on a table.">
                    </div>
                    <div class="product-tile-container">
                        <h3>Sunflower Lanyard</h3>
                    </div>
                    <div class="product-info">
                        <span class="product-price">$7.00</span>
                        <button class="buy-button">
                            <a href="../CART/shop_product_Lanyard.html">Buy</a></li>
                        </button>
                    </div>
                </div>

                <!--card 5 -->
                <div class="product-card">
                    <div class="product-image-box">
                        <img src="../STATIC/trio of balls.jpg"
                            alt="A stack of three geometric balls with soft pointed edges.">
                    </div>
                    <div class="product-tile-container">
                        <h3>Trio of balls</h3>
                    </div>
                    <div class="product-info">
                        <span class="product-price">$22.10</span>
                        <button class="buy-button">
                            <a href="../CART/shop_product_trio_balls.html">Buy</a></li>
                        </button>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <footer>
        <div class="footer-container">
            <div class="left">
                <p>Contact us!</p>
                <p>Email: hello.thequietnetwork@gmail.com</p>
                <p>Phone: (+61) 0123 456 789</p>
            </div>
            <div class="right">
                <p>Icon made by photo3idea_studio from www.flaticon.com</p>
                <p>Images generated with google Gemini</p>
                <p>(C) 2026 The Quiet Network</p>
            </div>

    </footer>
</body>
</html>