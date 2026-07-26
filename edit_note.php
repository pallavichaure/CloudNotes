<?php
session_start();
include 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Check if note ID is provided
if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// Fetch note
$sql = "SELECT * FROM notes WHERE id='$id' AND user_id='$user_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "<script>
            alert('Note not found!');
            window.location='dashboard.php';
          </script>";
    exit();
}

$row = mysqli_fetch_assoc($result);

// Update note
if (isset($_POST['update'])) {

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $update = "UPDATE notes
               SET title='$title',
                   description='$description'
               WHERE id='$id' AND user_id='$user_id'";

    if (mysqli_query($conn, $update)) {

        echo "<script>
                alert('Note Updated Successfully!');
                window.location='dashboard.php';
              </script>";

    } else {

        echo "<script>alert('Update Failed!');</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Note | CloudNotes</title>

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

<h2>Edit Note</h2>

<form method="POST">

<label>Note Title</label>

<input
type="text"
name="title"
value="<?php echo htmlspecialchars($row['title']); ?>"
required>

<label>Description</label>

<textarea
name="description"
rows="8"
required><?php echo htmlspecialchars($row['description']); ?></textarea>

<div class="buttons">

<button
type="submit"
name="update"
class="save-btn">
Update Note
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