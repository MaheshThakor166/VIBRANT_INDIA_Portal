<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>VERIFY EMAIL</h1>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif

        <!-- OTP Form -->
        <form action="{{ route('user.otp.verify') }}" method="POST">
            @csrf
            <label for="otp">OTP:</label><br>
            <input type="text" name="otp" placeholder="Enter your OTP" required><br><br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Resend OTP Section -->
        <form action="{{ route('otp.resend') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-link">Resend OTP</button>
        </form>

        <!-- Flash Messages for Success or Error -->
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif
    </div>
</body>
</html>
