<!DOCTYPE html>
<html lang="en">
<head>
  <x-head/>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo">
                {{-- <img src="../adminpanel/images/logo.png" alt="Logo" class="logo-img"> --}}

            </div>
            <nav>
                <a href="#" class="active"><i class="fa fa-home"></i> Dashboard</a>
                <a href="#"><i class="fa fa-users"></i> Users</a>
                <a href="#"><i class="fa fa-shopping-cart"></i> Orders</a>
                <a href="#"><i class="fa fa-box"></i> Products</a>
                <a href="#"><i class="fa fa-chart-line"></i> Reports</a>
                <a href="#" class="logout"><i class="fa fa-sign-out-alt"></i> Logout</a>
            </nav>
        </aside>

        <main class="main-content">
            <!-- <header class="topbar">
                <button class="menu-toggle" onclick="toggleSidebar()"><i class="fa fa-bars"></i></button>
              
                <div class="user-actions">
                    <i class="fa fa-bell notification-icon"></i>
                    <img src="user-avatar.png" alt="User" class="user-avatar">
                </div>
            </header> -->

            <section class="dashboard-metrics">
                <div class="card">
                    <p>Total User</p>
                    <h3>125</h3>
                    
                </div>
                <div class="card">
                    <p>Total Product</p>
                    <h3>125</h3>
                </div>
                <div class="card">
                    <p>Total Inquiry</p>
                    <h3>125</h3>
                </div>
                <!-- <div class="card">
                    <p>Total Product</p>
                    <h3>125</h3>
                </div> -->
            </section>

            <section class="top-products">
                <h2>Top Products</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Popularity</th>
                            <th>Sales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Home Decor Range</td>
                            <td><div class="popularity-bar" style="width: 78%;"></div></td>
                            <td>78%</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Disney Princess Dress</td>
                            <td><div class="popularity-bar" style="width: 62%;"></div></td>
                            <td>62%</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Bathroom Essentials</td>
                            <td><div class="popularity-bar" style="width: 51%;"></div></td>
                            <td>51%</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Apple Smartwatch</td>
                            <td><div class="popularity-bar" style="width: 29%;"></div></td>
                            <td>29%</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
    <div>
     <x-script/>
    </div>
</body>
</html>
