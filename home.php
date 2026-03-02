<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ecommerce-site/ecommerce/Assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Shopify</title>
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <h2>Shopify</h2>
        </div>
        <div class="links">
            <ul>
                <a href="#">New Arrivals</a>
                <a href="#">Men</a>
                <a href="#">Women</a>
                <a href="#">Sale</a>
            </ul>
        </div>
        <div class="search-bar">
            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
            <i class="fa-solid fa-magnifying-glass search" style="color: #77bda8ff;"></i>
            <input type="search" placeholder="Search products...">
            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
            <i class="fa-solid fa-heart heart"></i>
            <i class="fa-solid fa-cart-shopping cart"></i>
            <i class="fa-solid fa-circle-user user"></i>
        </div>
    </header>
    <div class="container">
        <div class="card">
            <p class="text">New Season</p>
            <h1 class="card-title">Summer Collection 2024</h1>
            <p>Discover the latest trends in sustainable fashion. Upgrade your wardrobe with our premium selection
                designed for comfort and style.</p>
            <button class="shopnow btn">Shop Now</button>
            <button class="lookbook btn">View Lookbook</button>
        </div>
        <div class="card-image">
            <img src="/ecommerce-site/ecommerce/Assets/images/home_page.png" alt="Summer Collection">
        </div>
    </div>

    <div class="category">
        <div class="category-text">
            <h2>Shop by Category</h2>
            <a href="#">View all category <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="category-card" style="display:inline-block;">
            <img src="/ecommerce-site/ecommerce/Assets/images/men.png" class="card-img-top" alt="...">
            <div class="category-name">
                <p class="name">Men</p>
            </div>
        </div>
        <div class="category-card" style="display:inline-block;">
            <img src="/ecommerce-site/ecommerce/Assets/images/women.png" class="card-img-top" alt="...">
            <div class="category-name">
                <p class="name">Women</p>
            </div>
        </div>
        <div class="category-card" style="display:inline-block;">
            <img src="/ecommerce-site/ecommerce/Assets/images/accessories.png" class="card-img-top" alt="...">
            <div class="category-name">
                <p class="name">Accessories</p>
            </div>
        </div>
        <div class="category-card" style="display:inline-block;">
            <img src="/ecommerce-site/ecommerce/Assets/images/shoes.png" class="card-img-top" alt="...">
            <div class="category-name">
                <p class="name">Shoes</p>
            </div>
        </div>
        <div class="category-card" style="display:inline-block;">
            <img src="/ecommerce-site/ecommerce/Assets/images/electronics.png" class="card-img-top" alt="...">
            <div class="category-name">
                <p class="name">Electronics</p>
            </div>
        </div>
        <div class="category-card" style="display:inline-block;">
            <img src="/ecommerce-site/ecommerce/Assets/images/home.png" class="card-img-top" alt="...">
            <div class="category-name">
                <p class="name">Home</p>
            </div>
        </div>
        <div class="category-card" style="display:inline-block;">
            <img src="/ecommerce-site/ecommerce/Assets/images/sports.png" class="card-img-top" alt="...">
            <div class="category-name">
                <p class="name">Home</p>
            </div>
        </div>
    </div>


<section class="featured">
    <div class="featured-header">
        <div>
            <h2>Featured Products</h2>
            <p>Our best-selling items selected for you.</p>
        </div>
        <div class="slider-buttons">
            <button>&larr;</button>
            <button>&rarr;</button>
        </div>
    </div>

    <div class="product-grid">

        <!-- Product Card -->
        <div class="product-card">
            <span class="badge new">New</span>
            <span class="wishlist">♡</span>

            <img src="/ecommerce-site/ecommerce/assets/images/watch.png" alt="Product">

            <div class="product-info">
                <div class="rating">★★★★★ <span>(4.8)</span></div>
                <h4>Smart Watch Series 5</h4>
                <p class="category">Electronics</p>

                <div class="price-row">
                    <span class="price">$399.00</span>
                    <button class="cart-btn">🛒</button>
                </div>
            </div>
        </div>

        <!-- Product Card -->
        <div class="product-card">
            <span class="wishlist">♡</span>

            <img src="/ecommerce-site/ecommerce/assets/images/shoe.png" alt="Product">

            <div class="product-info">
                <div class="rating">★★★★☆ <span>(4.0)</span></div>
                <h4>Pro Runner Sneakers</h4>
                <p class="category">Shoes</p>

                <div class="price-row">
                    <span class="price">$120.00</span>
                    <button class="cart-btn">🛒</button>
                </div>
            </div>
        </div>

        <!-- Product Card -->
        <div class="product-card">
            <span class="badge sale">-20%</span>
            <span class="wishlist">♡</span>

            <img src="/ecommerce-site/ecommerce/assets/images/cloth.png" alt="Product">

            <div class="product-info">
                <div class="rating">★★★★★ <span>(5.0)</span></div>
                <h4>Classic Cotton Tee</h4>
                <p class="category">Men</p>

                <div class="price-row">
                    <span class="price">$35.00 <del>$45.00</del></span>
                    <button class="cart-btn">🛒</button>
                </div>
            </div>
        </div>

        <!-- Product Card -->
        <div class="product-card">
            <span class="wishlist">♡</span>

            <img src="/ecommerce-site/ecommerce/assets/images/bag.png" alt="Product">

            <div class="product-info">
                <div class="rating">★★★★☆ <span>(4.6)</span></div>
                <h4>Everyday Backpack</h4>
                <p class="category">Accessories</p>

                <div class="price-row">
                    <span class="price">$85.00</span>
                    <button class="cart-btn">🛒</button>
                </div>
            </div>
        </div>

    </div>
</section>


    <div class="club-join">
        <div class="club-text">
            <h2>Join the Club</h2>
            <p>Sign up for our newsletter and get 10% off your first order, plus early access to new Collection</p>
        </div>
        <div class="club-input">
            <input type="email" placeholder="Enter your email">
            <button class="subscribe btn">Subscribe</button>
            <p>We respect your privacy. Unsubscribe at any time.</p>
        </div>
    </div>






    <footer>
        <div class="shopify">
            <ul>
                <h2>Shopify</h2>
                <li>Your one-stop destination for premium</li>
                <li>fashion and lifestyle products. Quality</li>
                <li> guranteed.</li>
            </ul>
        </div>
        <div class="shop">
            <ul>
                <h2>Shop</h2>
                <li>New Arrivals</li>
                <li>Men's Fashion</li>
                <li>Women's Fashion</li>
                <li>Accessories</li>
                <li>Sale</li>
            </ul>
        </div>
        <div class="support">
            <ul>
                <h2>Support</h2>
                <li>Contact Us</li>
                <li>Shipping & Returns</li>
                <li>FAQs</li>
                <li>Privcy Policy</li>
                <li>Terms of Services</li>
            </ul>
        </div>
        <div class="contact">
            <ul>
                <h2>Contact</h2>
                <li><i class="fa-solid fa-location-dot"></i>123 Commerce St, Market City,New York 10012</li>
                <li><i class="fa-solid fa-phone"></i>+1 (555) 123-4567</li>
                <li><i class="fa-solid fa-envelope"></i> support@shopify-demo.com</li>
            </ul>
        </div>
    </footer>

</body>

</html>