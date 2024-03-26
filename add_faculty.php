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
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url('images/background.jpg'); /* Background image */
            background-size: cover;
            background-blur: 5px; /* Blur effect */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        form {
            width: 300px;
            margin: 0 auto; /* Center the form */
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-container a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }
    </style>
    <title>Add Faculty</title>
</head>
<body>
    <div class="container">
        <h1>Add Faculty</h1>
        <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
            <p style="color: green; text-align: center;">Faculty member added successfully!</p>
        <?php endif; ?>
        <form action="process_faculty.php" method="POST">
            <label for="faculty_name">Faculty Name:</label>
            <input type="text" id="faculty_name" name="faculty_name" required>

            <label for="faculty_department">Department:</label>
            <input type="text" id="faculty_department" name="faculty_department" required>

            <label for="faculty_email">Email:</label>
            <input type="email" id="faculty_email" name="faculty_email" required>

            <label for="faculty_phone">Phone:</label>
            <input type="text" id="faculty_phone" name="faculty_phone" required>

            <input type="submit" value="Add Faculty">
        </form>
        <div class="btn-container">
            <a href="add_faculty.php">Add More Faculty</a>
            <a href="index.php">Go to Home Page</a>
        </div>
    </div>
</body>
</html>