<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ecommerce-site/ecommerce/Assets/css/product-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Product Page</title>
</head>

<body>
    <nav>
        <h2>Shop</h2>

        <input type="search" class="search" placeholder="Search Products...">
        <div class="links">
            <ul>
                <a href="#">Home</a>
                <a href="#">Men</a>
                <a href="#">Women</a>
                <a href="#">Sale</a>
            </ul>
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-solid fa-circle-user"></i>
        </div>
    </nav>
    <div class="body-content">
        <div class="home-nav">
            <a href="#">Home</a> / <a href="#">Men</a> / <span>Product Name</span>
        </div>
        <div class="page-header">
            <h1>Men's Running Shoes</h1>
            <div class="sort">
                <label for="sort-select">Sort by</label>
                <select id="sort-select">
                    <option value="popular">Most Popular</option>
                    <option value="newest">Newest</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                </select>
            </div>
        </div>
        <p class="product-count">Showing 1-12 of 145 products</p>
    </div>

    <div class="main-content">
        <div class="categories">
            <div class="category">
                <h3>CATEGORIES</h3>
                <input type="checkbox" name="" id="">
                <p class="checkbox-text">Running Shoes</p>
                <p class="quantity">(145)</p>
                <input type="checkbox" name="" id="">
                <p class="checkbox-text">Training Shoes</p>
                <p class="quantity">(32)</p>
                <input type="checkbox" name="" id="">
                <p class="checkbox-text">Trail Running</p>
                <p class="quantity">(18)</p>
                <input type="checkbox" name="" id="">
                <p class="checkbox-text">Walking</p>
                <p class="quantity">(45)</p>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <img src="/ecommerce-site/ecommerce/assets/images/product-image.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Nike Air Zoom Pegasus 42</p>
                    <p class="card-desc">Responsive foam for everyday runs</p>
                    <p class="product-price">$120.00</p>
                </div>
            </div>
            <div class="card">
                <img src="/ecommerce-site/ecommerce/assets/images/product-image.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Nike Air Force 1'07</p>
                    <p class="card-desc">Classic style, modern comfort</p>
                    <p class="product-price">$96.00</p>
                </div>
            </div>
            <div class="card">
                <img src="/ecommerce-site/ecommerce/assets/images/product-image.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Ultraboost Light</p>
                    <p class="card-desc">Lightweight cushioning for maximum comfort</p>
                    <p class="product-price">$150.00</p>
                </div>
            </div>
            <div class="card">
                <img src="/ecommerce-site/ecommerce/assets/images/product-image.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Adizeri Boston 12</p>
                    <p class="card-desc">Engineered for speed and agility</p>
                    <p class="product-price">$130.00</p>
                </div>
            </div>
            <div class="card">
                <img src="/ecommerce-site/ecommerce/assets/images/product-image.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">React Infinity 3</p>
                    <p class="card-desc">Ultimate comfort for long-distance runs</p>
                    <p class="product-price">$160.00</p>
                </div>
            </div>
            <div class="card">
                <img src="/ecommerce-site/ecommerce/assets/images/product-image.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Zoom Fly 5</p>
                    <p class="card-desc">Lightweight design for maximum speed</p>
                    <p class="product-price">$140.00</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Shop. All rights reserved.</p>
            <div class="social-media">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>


</body>

</html>