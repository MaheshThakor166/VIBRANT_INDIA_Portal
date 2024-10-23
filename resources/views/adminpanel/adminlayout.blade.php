<!-- resources/views/layouts/base.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <x-head />
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/mobile-logo.png') }}" alt="Logo" class="logo-img">
            </div>
            <nav>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><i class="fa-solid fa-house"></i> Dashboard</a>
                <a href="{{ route('users.index') }}" class="{{ request()->routeIs('userindex') ? 'active' : '' }}"><i class="fa-solid fa-user"></i> Users</a>
                <a href="#" class="{{ request()->routeIs('orders') ? 'active' : '' }}"><i class="fa-solid fa-shopping-cart"></i> Orders</a>
                <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}"><i class="fa-solid fa-box"></i> Products</a>
                <a href="#"><i class="fa-solid fa-chart-line"></i> Reports</a>
                <a href="#" class="logout"><i class="fa-solid fa-sign-out-alt"></i> Logout</a>
            </nav>
        </aside>

        <main class="main-content">
            @yield('content') <!-- This is where child views will inject their content -->
        </main>
    </div>
    <div>
     <x-script />
    </div>
</body>
</html>
