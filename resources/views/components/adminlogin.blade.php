<!DOCTYPE html>
<html lang="en">
<head>
    <x-head/>
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="admin-login">
        <div class="login-container">
            <!-- Logo Section -->
            <h2>Welcome Admin!</h2>

            <form action="/login" method="POST">
                <!-- Username Input with icon -->
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-user"></i></span>
                    <input type="text" name="username" placeholder="Username or Email" required>
                </div>

                <!-- Password Input with icon -->
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <!-- Login Button -->
                <button type="submit">Login</button>

            </form>

            <!-- Footer for Terms & Conditions -->
            <div class="footer">
                © 2024 Your Business | <a href="/terms">Terms & Conditions</a>
            </div>
        </div>
    </section>
</body>
</html>
