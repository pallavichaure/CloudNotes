<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile | CloudNotes</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<header>

<div class="logo">☁️ CloudNotes</div>

<nav>

<a href="dashboard.php">Dashboard</a>

<a href="profile.php">Profile</a>

<a href="logout.php">Logout</a>

</nav>

</header>

<div class="container">

<aside class="sidebar">

<h2>Menu</h2>

<a href="dashboard.php">🏠 Dashboard</a>

<a href="add_note.php">➕ Add Note</a>

<a href="profile.php">👤 Profile</a>

<a href="logout.php">🚪 Logout</a>

</aside>

<main class="content">

<div class="note-form">

<h2>My Profile</h2>

<form>

<label>Full Name</label>

<input type="text" value="Pallavi Chaure">

<label>Email Address</label>

<input type="email" value="pallavi@example.com">

<label>New Password</label>

<input type="password" placeholder="Enter new password">

<label>Confirm Password</label>

<input type="password" placeholder="Confirm password">

<div class="buttons">

<button class="save-btn">Update Profile</button>

</div>

</form>

</div>

</main>

</div>

<footer>

<p>© 2026 CloudNotes. All Rights Reserved.</p>

</footer>

</body>
</html>