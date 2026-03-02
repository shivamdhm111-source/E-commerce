<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="/ecommerce-site/ecommerce/Assets/css/cart.css">
</head>
<body>

<!-- Navbar -->
<header class="navbar">
    <div class="logo">🛍️ ShopUI</div>


    <nav>
        <a href="#">Home</a>
        <a href="#">Shop</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>

    <div class="nav-right">
        <input type="text" placeholder="Search...">
        <span class="cart-icon">🛒<small>3</small></span>
    </div>
</header>

<!-- Breadcrumb -->
<div class="breadcrumb">
    Home / <strong>Shopping Cart</strong>
</div>

<!-- Page Title -->
<div class="page-title">
    <h1>Shopping Cart</h1>
    <p>Review your items and proceed to checkout.</p>
</div>

<!-- Cart Layout -->
<div class="cart-layout">

    <!-- Left: Cart Items -->
    <div class="cart-items">

        <div class="cart-item">
            <img src="https://via.placeholder.com/80" alt="">
            <div class="item-info">
                <h4>Minimalist Leather Backpack</h4>
                <p>Color: Black | Size: One Size</p>
                <a href="#" class="remove">Remove</a>
            </div>

            <div class="quantity">
                <button>-</button>
                <span>1</span>
                <button>+</button>
            </div>

            <div class="price">$120.00</div>
        </div>

        <div class="cart-item">
            <img src="https://via.placeholder.com/80" alt="">
            <div class="item-info">
                <h4>Wireless Headphones</h4>
                <p>Color: Silver | Type: Over-ear</p>
                <a href="#" class="remove">Remove</a>
            </div>

            <div class="quantity">
                <button>-</button>
                <span>1</span>
                <button>+</button>
            </div>

            <div class="price">$250.00</div>
        </div>

        <div class="cart-item">
            <img src="https://via.placeholder.com/80" alt="">
            <div class="item-info">
                <h4>Premium Cotton Tee</h4>
                <p>Color: White | Size: L</p>
                <a href="#" class="remove">Remove</a>
            </div>

            <div class="quantity">
                <button>-</button>
                <span>2</span>
                <button>+</button>
            </div>

            <div class="price">$50.00</div>
        </div>

    </div>

    <!-- Right: Summary -->
    <div class="summary">
        <h3>Order Summary</h3>

        <div class="row">
            <span>Subtotal</span>
            <span>$420.00</span>
        </div>

        <div class="row">
            <span>Shipping estimate</span>
            <span class="free">Free</span>
        </div>

        <div class="row">
            <span>Tax estimate</span>
            <span>$33.60</span>
        </div>

        <hr>

        <div class="row total">
            <span>Total</span>
            <span>$453.60</span>
        </div>

        <label>Promo Code</label>
        <div class="promo">
            <input type="text" placeholder="Enter code">
            <button>Apply</button>
        </div>

        <button class="checkout-btn">Proceed to Checkout →</button>
    </div>

</div>

</body>
</html>
