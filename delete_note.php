<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];

    $sql = "DELETE FROM notes
            WHERE id='$id' AND user_id='$user_id'";

    if (mysqli_query($conn, $sql)) {

        header("Location: dashboard.php");

    } else {

        echo "Error deleting note.";

    }
}
?>