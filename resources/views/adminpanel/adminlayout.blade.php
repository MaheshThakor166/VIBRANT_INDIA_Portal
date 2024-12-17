<!-- resources/views/layouts/base.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <x-head />
</head>
<body style="background-color:#546093">
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/mobile-logo.png') }}" alt="Logo" class="logo-img">
            </div>
            <nav>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><i class="fa-solid fa-house"></i> Dashboard</a>
                <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('userindex') ? 'active' : '' }}"><i class="fa-solid fa-user"></i> Users</a>
                <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}"><i class="fa-solid fa-box"></i> Products</a>

                <a href="{{ route('admin.inquiry.index') }}" class="{{ request()->routeIs('orders') ? 'active' : '' }}"><i class="fa-solid fa-circle-info"></i>Inquiry</a>
                <a href="{{ route('admin.blogs.index') }}" class="{{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}"><i class="fa-solid fa-blog"></i> Blogs</a>
                <a href="#" class="logout" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 <i class="fa-solid fa-sign-out-alt"></i> Logout
             </a>
             
             <!-- Logout Form (hidden) -->
             <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
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
