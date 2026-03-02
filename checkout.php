<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ecommerce-site/ecommerce/Assets/css/checkout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>checkout</title>
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <h2> <i class="fa-solid fa-bag-shopping" style="color: #B197FC;"></i> Shopify</h2>
        </div>
        <div class="secure">
            <i style="display: inline-block;" class="fa-solid fa-lock"></i>
            <p>Secure Checkout</p>
        </div>
    </header>


    <div class="cart-info">
        <div class="labels">
            <p class="cart">Cart</p>
            <p style="display: inline-block;" class="arrow">></p>
            <p class="Information">Information</p>
            <p style="display: inline-block;" class="arrow">></p>
            <p class="Shipping">Shipping</p>
            <p style="display: inline-block;" class="arrow">></p>
            <p class="Payment">Payment</p>
        </div>
    </div>

    <form action="">
        <div class="contact">
            <h3>Contact Information</h3>
            <p>Already have an account? <a href="#">Log in</a></p>
            <label for="email">Email address</label>
            <input type="email" placeholder="you@example.com">
            <input type="checkbox" class="email-news">Email me with news and offers
        </div>

        <!-- checkout section -->

        <div class="checkout-right">
            <div class="summary-card">
                <h3>Order Summary</h3>

                <div class="summary-item">
                    <span>Product Name</span>
                    <span>$299.00</span>
                </div>

                <div class="summary-item">
                    <span>Shipping</span>
                    <span>$15.00</span>
                </div>

                <div class="summary-item">
                    <span>Tax</span>
                    <span>$0.00</span>
                </div>

                <hr>

                <div class="summary-total">
                    <span>Total</span>
                    <span>$314.00</span>
                </div>
            </div>
        </div>

        <!-- shipping-address -->

        <div class="shipping-address">
            <label for="country">Country/Region</label>
            <select class="form-select" id="inputGroupSelect01">
                <option selected>united states</option>
                <option value="1">United States</option>
                <option value="2">Canada</option>
                <option value="3">United Kingdom</option>
            </select>
            <div class="row">
                <div class="form-group">
                    <label for="first-name">First name</label>
                    <input type="text" class="form-control" id="first-name" placeholder="First name">
                </div>
                <div class="form-group">
                    <label for="last-name">Last name</label>
                    <input type="text" class="form-control" id="last-name" placeholder="Last name">
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="apartment">Apartment, suite, etc. (optional)</label>
                <input type="text" class="form-control" id="apartment" placeholder="Apartment, suite, etc. (optional)">
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="City">
                </div>
                <div class="form-group">
                    <label for="State">State</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>united states</option>
                        <option value="1">United States</option>
                        <option value="2">Canada</option>
                        <option value="3">United Kingdom</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="zip">ZIP code</label>
                <input type="text" class="form-control" id="zip" placeholder="ZIP code">
            </div>
        </div>

        <div class="shipping-method">
            <div class="card">
                <h3>Shipping Method</h3>

                <label class="shipping-option active">
                    <div class="left">
                        <input type="radio" name="shipping" checked>
                        <div>
                            <strong>Standard Shipping</strong>
                            <p>5–7 business days</p>
                        </div>
                    </div>
                    <span class="price">$15.00</span>
                </label>

                <label class="shipping-option">
                    <div class="left">
                        <input type="radio" name="shipping">
                        <div>
                            <strong>Express Shipping</strong>
                            <p>1–3 business days</p>
                        </div>
                    </div>
                    <span class="price">$25.00</span>
                </label>

            </div>
        </div>

        <div class="payment">
            <div class="payment-header">
                <h3>Payment</h3>
                <span class="secure">🔒 SECURE SSL</span>
            </div>

            <!-- Payment Tabs -->
            <div class="payment-tabs">
                <button class="tab active">💳 Credit Card</button>
                <button class="tab">🅿️ PayPal</button>
            </div>

            <!-- Credit Card Form -->
            <form class="payment-form">
                <div class="form-group">
                    <label>Card number</label>
                    <input type="text" placeholder="0000 0000 0000 0000">
                </div>

                <div class="row">
                    <div class="form-group">
                        <label>Expiration date (MM / YY)</label>
                        <input type="text" placeholder="MM / YY">
                    </div>

                    <div class="form-group">
                        <label>Security code</label>
                        <input type="text" placeholder="CVC">
                    </div>
                </div>

                <div class="form-group">
                    <label>Name on card</label>
                    <input type="text">
                </div>
            </form>
        </div>
    </form>
    <div class="pay-actions">

        <a href="#" class="return-cart">
            ← Return to cart
        </a>

        <button class="pay-btn">
            🔒 Pay $314.00
        </button>

    </div>

    <!-- right section -->




</body>

<script>
const options = document.querySelectorAll(".shipping-option");

options.forEach(option => {
    option.addEventListener("click", () => {
        options.forEach(o => o.classList.remove("active"));
        option.classList.add("active");
        option.querySelector("input").checked = true;
    });
});
</script>

</html>