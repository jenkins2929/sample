<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/edit.profile.css">
    <title>Edit Profile</title>
    
</head>
<body>
    <form action="#">
        <h2>Edit Profile</h2>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars('Mallika'); ?>"><br>
        <label for="student_id">Student ID</label>
        <input type="text" id="student_id" name="student_id" value="<?php echo htmlspecialchars('206K1A0508'); ?>"><br>
        <label for="program">Program</label>
        <input type="text" id="program" name="program" value="<?php echo htmlspecialchars('Computer Science'); ?>"><br>
        <label for="year">Year</label>
        <input type="text" id="year" name="year" value="<?php echo htmlspecialchars('4'); ?>"><br>
        <button type="submit" class="button">Save Changes</button>
    </form>
</body>
</html>