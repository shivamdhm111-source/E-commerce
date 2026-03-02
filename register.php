<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Create Account</title>
    <link rel="stylesheet" href="/ecommerce-site/ecommerce/Assets/css/register.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<header class="navbar">
    <div class="logo">Shopify</div>
    <i class="fa-solid fa-magnifying-glass search-icon"></i>
    <input type="text" class="search" placeholder="Search products...">

    <nav class="nav-links">
        <a href="#">Shop</a>
        <a href="#">Stories</a>
        <a href="#">About</a>
        <a href="#">Log In</a>
        <button class="btn-primary">Sign Up</button>
        <i class="fa-solid fa-cart-shopping cart"></i>
    </nav>
</header>

<div class="register-container">
    <h1>Create your account</h1>
    <p class="subtitle">Join us to get exclusive offers and track your orders.</p>

    <form class="register-form">
        <div class="row">
            <div class="field">
                <label>First Name</label>
                <input type="text" placeholder="Jane">
            </div>
            <div class="field">
                <label>Last Name</label>
                <input type="text" placeholder="Doe">
            </div>
        </div>

        <div class="field">
            <label>Email Address</label>
            <input type="email" placeholder="name@company.com">
        </div>

        <div class="field">
            <label>Password</label>
            <input type="password" placeholder="••••••••">
            <small>Must be at least 8 characters</small>
        </div>

        <div class="field">
            <label>Confirm Password</label>
            <input type="password" placeholder="••••••••">
        </div>

        <div class="checkbox">
            <input type="checkbox">
            <span>I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</span>
        </div>

        <button class="submit-btn">Create Account</button>
        <div class="divider"><span>OR CONTINUE WITH</span></div>

        <div class="social-buttons">
            <button class="google">Google</button>
            <button class="apple">Apple</button>
        </div>

        <p class="login-link">Already have an account? <a href="#">Log in</a></p>
    </form>
</div>

</body>
</html>
