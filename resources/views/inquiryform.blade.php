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
            <h2>Inqury Form!</h2>

            <form action="/login" method="POST">
                <!-- Username Input with icon -->
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-user"></i></span>
                    <input type="text" name="username" placeholder="Enter Username" required>
                </div>
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" placeholder="Enter Email" required>
                </div>

                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" placeholder="Enter Password" required>
                </div>
                <div class="input-icon">
                    <textarea id="message" name="message" rows="4" placeholder="Enter your message here..."></textarea>
                </div>

                <button type="submit">submit</button>

            </form>

            <!-- Footer for Terms & Conditions -->
            <div class="footer-copyrights">
                © 2024 Your Business | <a href="/terms">Terms & Conditions</a>
            </div>
        </div>
    </section>
</body>
</html>
