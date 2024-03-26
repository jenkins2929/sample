<?php
session_start();

// Check if user is logged in as admin, if not, redirect to login page
if (!isset($_SESSION['admin_username'])) {
    header("Location: index.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/AdminDashboard.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Admin Dashboard!</h1>
        <div class="options">
            <a href="add_faculty.php" class="option">Faculty Management</a>
            <a href="feedback.php" class="option">Feedback Management</a>
            <a href="feedback_reports.php" class="option">Feedback Reports</a>
            <a href="Adminlogout.php" class="option">Logout</a>
        </div>
    </div>
</body>
</html>