# Ecommerce Site

A simple ecommerce website built with PHP, featuring product browsing, shopping cart, user authentication, and admin panel.

## Features

- User registration and login
- Product catalog with detailed product pages
- Shopping cart functionality
- Checkout system
- Admin panel for managing the store
- Responsive design with CSS styling

## Prerequisites

Before you begin, ensure you have the following installed:

- **XAMPP** (or any other PHP development environment)
- **PHP** (7.4 or higher)
- **MySQL/MariaDB** (for database)
- **Git** (for cloning the repository)

## Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/YOUR_USERNAME/ecommerce-site.git
cd ecommerce-site/ecommerce
```

### Step 2: Set Up XAMPP

1. Download and install [XAMPP](https://www.apachefriends.org/) if not already installed
2. Start the XAMPP Control Panel
3. Enable **Apache** and **MySQL** modules

### Step 3: Place Files in XAMPP

1. Copy your project folder to: `C:\xampp\htdocs\`
2. Your project path should be: `C:\xampp\htdocs\ecommerce-site\ecommerce\`

### Step 4: Set Up Database

1. Open **phpMyAdmin** by navigating to `http://localhost/phpmyadmin/`
2. Go to the **Import** tab
3. Upload the SQL file located at: `Assets/Data Base/ecommerce_database.sql`
4. Click **Import** to create the database and tables

**The SQL file will automatically create:**
- `users` table - for user accounts
- `products` table - for product listings
- `orders` table - for customer orders
- `order_items` table - for items in each order
- `cart` table - for shopping carts
- `categories` table - for product categories
- Sample product data

### Step 5: Configure Database Connection

The database connection is configured in: **`Assets/Data Base/dbconnect.php`**

Default credentials:
- Database host: `localhost`
- Database name: `ecommerce`
- Database username: `root`
- Database password: (empty)

If your credentials differ, update them in the `dbconnect.php` file.

### Step 6: Run the Application

1. Start Apache and MySQL from the XAMPP Control Panel
2. Open your web browser and navigate to:
   ```
   http://localhost/ecommerce-site/ecommerce/
   ```
3. The homepage should load successfully

## Project Structure

```
ecommerce/
├── admin_page.php                          # Admin dashboard
├── cart.php                                # Shopping cart
├── checkout.php                            # Checkout page
├── home.php                                # Homepage
├── login.php                               # User login
├── product_details.php                     # Product details
├── product-page.php                        # Product listing
├── register.php                            # User registration
├── README.md                               # This file
├── Assets/
│   ├── css/                                # Stylesheets
│   │   ├── admin_page.css
│   │   ├── cart.css
│   │   ├── checkout.css
│   │   ├── home.css
│   │   ├── login.css
│   │   ├── product_details.css
│   │   ├── product-page.css
│   │   └── register.css
│   ├── images/                             # Image assets
│   ├── js/                                 # JavaScript files
│   └── Data Base/
│       ├── dbconnect.php                   # Database connection file
│       └── ecommerce_database.sql          # Database setup SQL
└── 
```

## Usage

### For Users

1. **Register/Login**: Create an account or sign in at `login.php`
2. **Home Page**: Browse and explore products
3. **Product Details**: Click on a product to see detailed information
4. **Cart**: Add products to cart and review items
5. **Checkout**: Complete your purchase
6. **Logout**: Click logout to end your session

### For Admin

1. Navigate to **Admin Page** at `admin_page.php`
2. Manage products, orders, and store settings

## Database Tables

### Users Table
- `id` - User ID (Primary Key)
- `first_name` - First name
- `last_name` - Last name
- `email` - Email address (Unique)
- `password` - Hashed password
- `phone` - Phone number
- `address` - Shipping address
- `city`, `zip_code`, `country` - Location info

### Products Table
- `id` - Product ID (Primary Key)
- `name` - Product name
- `description` - Product description
- `price` - Product price
- `stock` - Available stock
- `category` - Product category
- `image_url` - Product image URL

### Orders Table
- `id` - Order ID (Primary Key)
- `user_id` - Reference to user
- `total_amount` - Order total
- `status` - Order status (pending, processing, shipped, delivered, cancelled)
- `shipping_address` - Delivery address
- `payment_method` - Payment method used

### Cart Table
- `id` - Cart item ID
- `user_id` - Reference to user
- `product_id` - Reference to product
- `quantity` - Number of items

## Troubleshooting

### Database Connection Error
- Verify MySQL is running in XAMPP Control Panel
- Check that the database exists in phpMyAdmin
- Confirm credentials in `Assets/Data Base/dbconnect.php`

### Page not found
- Ensure XAMPP is running with Apache enabled
- Verify the correct file path in your URL

### CSS/Images not loading
- Check that file paths in HTML/CSS match your project structure
- Verify that the path `/ecommerce-site/ecommerce/` matches your folder location

### Import SQL file error
- Make sure the SQL file is not corrupted
- Check that phpMyAdmin has proper permissions
- Try creating the database manually and running the SQL queries

## Technologies Used

- **PHP**: Backend development
- **MySQL**: Database management
- **CSS**: Styling and layout
- **JavaScript**: Frontend interactivity
- **Apache**: Web server

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/new-feature`)
3. Commit your changes (`git commit -m 'Add new feature'`)
4. Push to the branch (`git push origin feature/new-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Support

For issues or questions, please open an issue on GitHub or contact the maintainer.

---

**Happy Coding!** 🚀
