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
2. Create a new database for the project
3. Import the database SQL file (if you have one) or create necessary tables

### Step 5: Configure Database Connection

1. Update database credentials in your PHP files if needed
2. Ensure the following are configured:
   - Database host (usually `localhost`)
   - Database name
   - Database username (usually `root`)
   - Database password (usually empty by default)

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
├── admin_page.php          # Admin dashboard
├── cart.php                # Shopping cart
├── checkout.php            # Checkout page
├── home.php                # Homepage
├── login.php               # User login
├── product_details.php     # Product details
├── product-page.php        # Product listing
├── register.php            # User registration
├── Assets/
│   ├── css/                # Stylesheets
│   │   ├── admin_page.css
│   │   ├── cart.css
│   │   ├── checkout.css
│   │   ├── home.css
│   │   ├── login.css
│   │   ├── product_details.css
│   │   ├── product-page.css
│   │   └── register.css
│   ├── images/             # Image assets
│   └── js/                 # JavaScript files
└── README.md               # This file
```

## Usage

### For Users

1. **Home Page**: View product listings
2. **Product Details**: Click on a product to see detailed information
3. **Cart**: Add products to cart and review items
4. **Checkout**: Complete your purchase
5. **Login/Register**: Create an account or sign in

### For Admin

1. Navigate to the **Admin Page** (admin_page.php)
2. Manage products, orders, and other store functions

## Troubleshooting

- **Page not found**: Ensure XAMPP is running and the file path is correct
- **Database connection error**: Check database credentials in your PHP files
- **CSS/Images not loading**: Verify the file paths in your HTML/CSS files
- **Port conflicts**: If port 80 is in use, change the Apache port in XAMPP settings

## Technologies Used

- **PHP**: Backend development
- **MySQL**: Database management
- **CSS**: Styling and layout
- **JavaScript**: Frontend interactivity
- **Apache**: Web server

## Future Improvements

- Add payment gateway integration
- Implement order tracking
- Add product reviews and ratings
- Improve search functionality
- Mobile responsiveness enhancements

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
