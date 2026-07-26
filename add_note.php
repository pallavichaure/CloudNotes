<?php
session_start();
include 'config.php';

// Check login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {

    $user_id = $_SESSION['user_id'];

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $sql = "INSERT INTO notes(user_id,title,description)
            VALUES('$user_id','$title','$description')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Note Added Successfully!');
                window.location='dashboard.php';
              </script>";

    } else {

        echo "<script>alert('Error Adding Note');</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Note | CloudNotes</title>

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

<h2>Add New Note</h2>

<form method="POST">

<label>Note Title</label>

<input
type="text"
name="title"
placeholder="Enter note title"
required>

<label>Description</label>

<textarea
name="description"
rows="8"
placeholder="Write your note here..."
required></textarea>

<div class="buttons">

<button
type="submit"
name="submit"
class="save-btn">
Save Note
</button>

<a
href="dashboard.php"
class="cancel-btn">
Cancel
</a>

</div>

</form>

</div>

</main>

</div>

<footer>
<p>&copy; 2026 CloudNotes. All Rights Reserved.</p>
</footer>

</body>
</html>