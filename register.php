<?php
include 'config.php';

if (isset($_POST['submit'])) {

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {

        echo "<script>alert('Passwords do not match!');</script>";

    } else {

        $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

        if (mysqli_num_rows($check) > 0) {

            echo "<script>alert('Email already exists!');</script>";

        } else {

            $sql = "INSERT INTO users(fullname,email,password)
            VALUES('$fullname','$email','$password')";
            if (mysqli_query($conn, $sql)) {

                echo "<script>
                        alert('Registration Successful!');
                        window.location='login.php';
                      </script>";

            } else {

                echo "<script>alert('Registration Failed!');</script>";

            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | CloudNotes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">☁️ CloudNotes</div>

    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
    </nav>
</header>

<div class="form-container">

    <div class="form-box">

        <h2>Create Account</h2>

        <form method="POST">

            <label>Full Name</label>
            <input type="text" name="fullname" placeholder="Enter your full name" required>

            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Create your password" required>

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" placeholder="Confirm password" required>

            <button type="submit" name="submit">Register</button>

        </form>

        <p class="link">
            Already have an account?
            <a href="login.php">Login</a>
        </p>

    </div>

</div>

<footer>
    <p>&copy; 2026 CloudNotes. All Rights Reserved.</p>
</footer>

</body>
</html>