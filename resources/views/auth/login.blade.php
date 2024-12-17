<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Login</h2>

                <!-- Show any error messages -->
                @if(session('error') && strpos(session('error'), 'OTP') !== false)
                    <div class="alert alert-warning">
                        {{ session('error') }}
                        <a href="{{ route('viewotp') }}" class="btn btn-primary">Go to OTP Verification</a>
                    </div>
                @endif

                <!-- Login Form -->
                <form action="{{ route('login.process') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

                <!-- Forgot Password and Change Password Links -->
                <div class="d-flex justify-content-between mt-3">
                    <a href="{{route('password.request')}}" class="btn btn-link">Forgot Password?</a>
                    <br>
                    {{-- <a href="#" class="btn btn-link">Change Password</a> --}}
                </div>
              
            </div>
        </div>
    </div>
</body>
</html>
