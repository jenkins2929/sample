<?php
session_start();

// Check if user is logged in as admin, if not, redirect to login page
if (!isset($_SESSION['admin_username'])) {
    header("Location: index.php"); // Redirect to login page
    exit();
}

// Include the database connection file
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $faculty_name = $_POST['faculty_name'];
    $faculty_department = $_POST['faculty_department'];
    $faculty_email = $_POST['faculty_email'];
    $faculty_phone = $_POST['faculty_phone'];

    // Prepare and execute SQL statement to insert data into the database
    $sql = "INSERT INTO faculty (name, department, email, phone) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $faculty_name, $faculty_department, $faculty_email, $faculty_phone);

    if ($stmt->execute()) {
        // If data is successfully inserted, display added faculty details
        echo "<div class='container'>";
        echo "<div class='center'>";
        echo "<h2>Faculty Added Successfully</h2>";
        echo "<p>Name: $faculty_name</p>";
        echo "<p>Department: $faculty_department</p>";
        echo "<p>Email: $faculty_email</p>";
        echo "<p>Phone: $faculty_phone</p>";

        // Offer options to add more faculty or go to the home page with some space
        echo "<div style='margin-top: 20px;'>"; // Add some space
        echo "<a href='add_faculty.php' class='btn'>Add More Faculty</a>";
        echo "<a href='index.php' class='btn'>Go Home</a>";
        echo "</div>"; // Close div for button space
        echo "</div>"; // Close center div
        echo "</div>"; // Close container div
    } else {
        // If an error occurs, display an error message
        echo "Error: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/faculty.css"> <!-- Link to faculty.css -->
    <title>Add Faculty</title>
    <style>
        body {
            background-image: url('images/background.jpg'); /* Background image */
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            text-align: center; /* Center align content */
        }

        .center {
            margin: 0 auto; /* Center align container */
            max-width: 600px; /* Limit width of container */
        }

        .btn {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none; /* Remove default link underline */
            transition: background-color 0.3s ease; /* Smooth transition */
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
</body>
</html>
