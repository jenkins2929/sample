<?php
session_start(); // Start the session

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
    <link rel="stylesheet" href="css/feedback.css">
    <title>Feedback Form</title>
</head>
<body>
    <div class="container">
        <h2>Faculty Feedback Form</h2>
        <form action="submit_feedback.php" method="post">
            <label for="faculty_name">Faculty Name:</label><br>
            <input type="text" id="faculty_name" name="faculty_name" required><br><br>

            <label for="subject">Subject:</label><br>
            <input type="text" id="subject" name="subject" placeholder="" required><br><br>

            <label for="question1">Question 1: Teaching
            </label><br>
            <select id="question1" name="question1" required>
                <option value="">Select</option>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="average">Average</option>
                <option value="poor">Poor</option>
            </select><br><br>

            <label for="question2">Question 2: Mentoring</label><br>
            <select id="question2" name="question2" required>
                <option value="">Select</option>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="average">Average</option>
                <option value="poor">Poor</option>
            </select><br><br>

            <label for="question3">Question 3: Doubts-Solving</label><br>
            <select id="question3" name="question3" required>
                <option value="">Select</option>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="average">Average</option>
                <option value="poor">Poor</option>
            </select><br><br>

            <label for="question4">Question 4: Interaction with students</label><br>
            <select id="question4" name="question4" required>
                <option value="">Select</option>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="average">Average</option>
                <option value="poor">Poor</option>
            </select><br><br>

            <label for="comments">Additional Comments or Suggestions:</label><br>
            <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Submit Feedback">
        </form>
    </div>
</body>
</html>