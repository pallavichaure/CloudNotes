<?php
session_start();
include 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Get notes of logged-in user
$sql = "SELECT * FROM notes WHERE user_id='$user_id' ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | CloudNotes</title>
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

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Menu</h2>

        <a href="dashboard.php">🏠 Dashboard</a>
        <a href="add_note.php">➕ Add Note</a>
        <a href="profile.php">👤 Profile</a>
        <a href="logout.php">🚪 Logout</a>
    </aside>

    <!-- Main Content -->
    <main class="content">

        <h1>Welcome, <?php echo $_SESSION['fullname']; ?></h1>

        <a href="add_note.php" class="add-btn">+ Add New Note</a>

        <table>

            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Action</th>
            </tr>

            <?php
            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){
            ?>

            <tr>

                <td><?php echo htmlspecialchars($row['title']); ?></td>

                <td><?php echo htmlspecialchars($row['description']); ?></td>

                <td><?php echo $row['created_at']; ?></td>

                <td>
                    <a href="edit_note.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>

                    <a href="delete_note.php?id=<?php echo $row['id']; ?>"
                       class="delete"
                       onclick="return confirm('Are you sure you want to delete this note?');">
                       Delete
                    </a>
                </td>

            </tr>

            <?php
                }
            } else {
            ?>

            <tr>
                <td colspan="4">No Notes Found</td>
            </tr>

            <?php
            }
            ?>

        </table>

    </main>

</div>

<footer>
    <p>© 2026 CloudNotes. All Rights Reserved.</p>
</footer>

</body>
</html>