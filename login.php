<?php
session_start();
include 'config.php';

if(isset($_POST['submit'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){

        $row = mysqli_fetch_assoc($result);

        if ($password == $row['password']) {

            $_SESSION['user_id']=$row['id'];
            $_SESSION['fullname']=$row['fullname'];
            $_SESSION['email']=$row['email'];

            header("Location: dashboard.php");
            exit();

        }else{

            die("Password Not Matched");
        }

    }else{

        die("Email Not Found");
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | CloudNotes</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="logo">☁️ CloudNotes</div>

    <nav>
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
    </nav>
</header>

<div class="form-container">

    <div class="form-box">

        <h2>Login</h2>

        <form method="POST">

            <label>Email Address</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="submit">Login</button>

        </form>

        <p class="link">
            Don't have an account?
            <a href="register.php">Register</a>
        </p>

    </div>

</div>

<footer>
    <p>&copy; 2026 CloudNotes. All Rights Reserved.</p>
</footer>

</body>
</html>