<!DOCTYPE html>
<html lang="en">
<head>
    <x-head/>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="admin-login">
        <div class="login-container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <!-- Header Section -->
            <h2>Inquiry Form</h2>
           
            <form action="/inquiry" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Full Name Input -->
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-box"></i></span>
                    <input type="text" name="product_id" placeholder="Product Code" value="{{ request()->get('product_id') }}" readonly>
                </div>
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-box"></i></span>
                    <input type="text" name="product_name" placeholder="Product Name" value="{{ request()->get('product_name') }}" readonly>
                </div>
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-company"></i></span>
                    <input type="text" name="companyname" placeholder="Company Name" >
                </div>
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-user"></i></span>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>

                <!-- Email Address Input -->
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" placeholder="Enter Email" required 
    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" 
    title="Please enter a valid email address (e.g., user@example.com)">
                </div>

                <!-- Phone Number Input -->
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-phone"></i></span>
                    <input type="tel" name="phone" placeholder="Enter Phone Number">
                </div>

              
              

                <!-- Quantity Input -->
                <div class="input-icon">
                    <span class="form-icon-container"><i class="fas fa-sort-numeric-up"></i></span>
                    <input type="text" name="quantity" placeholder="Quantity" min="1" required>
                </div>

        
               

                <!-- Message Textarea -->
                <div class="input-icon">
                    <textarea id="message" name="message" rows="3" placeholder="Enter your message here..."></textarea>
                </div>

            
              
                <!-- Submit Button -->
                <button type="submit">Submit Inquiry</button>
            </form>

            <!-- Footer for Terms & Conditions -->
            <div class="footer-copyrights">
                © 2024 Your Business | <a href="/terms">Terms & Conditions</a>
            </div>
        </div>
    </section>
</body>
</html>
