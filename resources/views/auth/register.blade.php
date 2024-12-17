<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
    <h1>Registration Form</h1>
    <form action="{{route('register.save')}}" method="POST">
        <!-- CSRF Token for security (if using Laravel) -->
         @csrf
         @method('post')

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>

        <label for="mobile">Mobile:</label><br>
        <input type="text" id="mobile" name="mobileno" placeholder="Enter your mobile number" 
               pattern="[0-9]{10}" required><br><br>
        <!-- Pattern ensures exactly 10 digits -->

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Enter your password" 
               minlength="6" required><br><br>

        <button type="submit" value="submit">Submit</button>
    </form>
</body>
</html>
