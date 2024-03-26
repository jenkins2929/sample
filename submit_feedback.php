<?php
session_start(); // Start the session

// Check if user is logged in as admin, if not, redirect to login page
if (!isset($_SESSION['admin_username'])) {
    header("Location: index.php"); // Redirect to login page
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $facultyName = $_POST['faculty_name'];
    $subject = $_POST['subject'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $comments = $_POST['comments'];

    // Here you can process the form data, such as inserting it into a database
    // For demonstration purposes, we'll just print the data
    echo "<h2>Feedback Submitted Successfully!</h2>";
    echo "<p>Faculty Name: $facultyName</p>";
    echo "<p>Subject: $subject</p>";
    echo "<p>Question 1: $question1</p>";
    echo "<p>Question 2: $question2</p>";
    echo "<p>Question 3: $question3</p>";
    echo "<p>Question 4: $question4</p>";
    echo "<p>Comments: $comments</p>";
} else {
    // If the form is not submitted via POST method, redirect to the feedback form
    header("Location: feedback.php");
    exit();
}
?>
