<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Sent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Password Reset Email Sent</h4>
                    </div>
                    <div class="card-body text-center">
                        <p>If the email you provided is registered, you will receive a password reset link shortly.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary mt-3">Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
