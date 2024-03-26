<?php
session_start(); // Start the session

// Check if user is logged in, if not, redirect to login page
if (!isset($_SESSION['student_username'])) {
    header("Location: index.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/StudentDashboard.css">
    <title>Student Dashboard</title>
    <style>
        .dashboard {
            background-image: url('1.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="logout">
            <a href="Studentlogout.php" class="button">Logout</a>
        </div>
        <h2>Welcome to student dashboard!</h2>
        <div class="profile">
            <h2>Profile</h2>
            <p>Name: Mallika</p>
            <p>Student ID: 206K1A0508</p>
            <p>Program: Computer Science</p>
            <p>Year: 4</p>
            <p>Sem: 2</p>
            <a href="edit.profile.php" class="button">Edit Profile</a>
        </div>
        <div class="update-password">
            <h2>Update Password</h2>
            <form action="update-password.php" method="post">
                <label for="currentPassword">Current Password:</label><br>
                <input type="password" id="currentPassword" name="currentPassword" required><br><br>
                <label for="newPassword">New Password:</label><br>
                <input type="password" id="newPassword" name="newPassword" required><br><br>
                <label for="confirmPassword">Confirm New Password:</label><br>
                <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
                <a href="SavesChanges.php" class="button">Save changes</a>
            </form>
        </div>
        <div class="Submit-feedback">
            <h2>Submit Feedback</h2>
            <a href="feedback.php" class="button">Feedback</a>
        </div>
    </div>
</body>
</html>