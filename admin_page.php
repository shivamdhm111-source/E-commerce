<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/ecommerce-site/ecommerce/Assets/css/admin_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>

<div class="dashboard">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="brand">🛒 ShopAdmin</div>

        <p class="menu-title">MAIN MENU</p>
        <ul>
            <li class="active">Dashboard</li>
            <li>Orders</li>
            <li>Products</li>
            <li>Customers</li>
            <li>Analytics</li>
        </ul>

        <p class="menu-title">SETTINGS</p>
        <ul>
            <li>General</li>
            <li>Support</li>
        </ul>

        <div class="profile">
            <strong>Alex Morgan</strong>
            <span>Store Manager</span>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main">

        <!-- Topbar -->
        <div class="topbar">
            <input type="text" placeholder="Search orders, products, or customers...">
            <i class="fa-solid fa-bars bars"></i>
            <button class="create-btn">+ Create New</button>
        </div>

        <!-- Heading -->
        <h1>Dashboard Overview</h1>
        <p class="subtitle">Here is what's happening with your store today.</p>

        <!-- Stats -->
        <div class="stats">
            <div class="stat-card">
                <h4>Total Sales</h4>
                <h2>$24,500</h2>
                <p class="up">↑ 12% vs last month</p>
            </div>

            <div class="stat-card">
                <h4>Total Orders</h4>
                <h2>1,240</h2>
                <p class="up">↑ 5% vs last month</p>
            </div>

            <div class="stat-card">
                <h4>New Customers</h4>
                <h2>54</h2>
                <p class="down">↓ 2% vs last month</p>
            </div>

            <div class="stat-card">
                <h4>Pending Orders</h4>
                <h2>12</h2>
                <p class="note">Needs attention</p>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="content-grid">

            <!-- Orders Table -->
            <div class="card">
                <div class="card-header">
                    <h3>Recent Orders</h3>
                    <a href="#">View All</a>
                </div>

                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>

                    <tr>
                        <td>#ORD-001</td>
                        <td>John Doe</td>
                        <td>Oct 24, 2023</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>$120.00</td>
                    </tr>

                    <tr>
                        <td>#ORD-002</td>
                        <td>Sarah Smith</td>
                        <td>Oct 24, 2023</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>$345.50</td>
                    </tr>

                    <tr>
                        <td>#ORD-003</td>
                        <td>Michael Brown</td>
                        <td>Oct 23, 2023</td>
                        <td><span class="status shipped">Shipped</span></td>
                        <td>$89.00</td>
                    </tr>

                    <tr>
                        <td>#ORD-004</td>
                        <td>Emily Davis</td>
                        <td>Oct 23, 2023</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>$1,299.00</td>
                    </tr>

                    <tr>
                        <td>#ORD-005</td>
                        <td>David Wilson</td>
                        <td>Oct 22, 2023</td>
                        <td><span class="status cancelled">Cancelled</span></td>
                        <td>$24.00</td>
                    </tr>
                </table>
            </div>

            <!-- Low Stock -->
            <div class="card">
                <h3>Low Stock Alert</h3>

                <div class="stock-item">
                    <span>Minimalist Watch</span>
                    <span class="danger">2 left</span>
                </div>

                <div class="stock-item">
                    <span>Wireless Headphones</span>
                    <span class="warning">5 left</span>
                </div>

                <div class="stock-item">
                    <span>Sport Sneakers</span>
                    <span class="warning">8 left</span>
                </div>

                <button class="inventory-btn">View Inventory</button>
            </div>

        </div>

    </main>

</div>

    <script>
        (function(){
            var toggle = document.getElementById('sidebarToggle');
            var sidebar = document.querySelector('.sidebar');
            function isMobile(){ return window.innerWidth <= 768; }

            if(!toggle || !sidebar) return;

            toggle.addEventListener('click', function(e){
                sidebar.classList.toggle('show');
                toggle.classList.toggle('active');
            });

            // Close sidebar when tapping main content on mobile
            var main = document.querySelector('.main');
            if(main){
                main.addEventListener('click', function(){
                    if(isMobile() && sidebar.classList.contains('show')){
                        sidebar.classList.remove('show');
                        toggle.classList.remove('active');
                    }
                });
            }

            // Ensure proper state on resize
            window.addEventListener('resize', function(){
                if(!isMobile()){
                    sidebar.classList.remove('show');
                    toggle.classList.remove('active');
                }
            });
        })();

        // Hamburger toggle for .bars icon
        (function(){
            var bars = document.querySelector('.bars');
            var sidebar = document.querySelector('.sidebar');
            if(!bars || !sidebar) return;

            bars.addEventListener('click', function(e){
                e.stopPropagation();
                sidebar.classList.toggle('show');
            });

            // Close sidebar when clicking main content on mobile
            var main = document.querySelector('.main');
            if(main){
                main.addEventListener('click', function(){
                    if(window.innerWidth <= 768 && sidebar.classList.contains('show')){
                        sidebar.classList.remove('show');
                    }
                });
            }
        })();
    </script>

</body>
</html>
