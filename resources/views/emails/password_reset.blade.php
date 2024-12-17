<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body>
    <h2>Password Reset Request</h2>
    <p>We received a request to reset your password. You can reset your password by clicking the link below:</p>
    <a href="{{ $resetLink }}" style="padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px;">Reset Password</a>
    <p>If you did not request a password reset, please ignore this email.</p>
</body>
</html>
