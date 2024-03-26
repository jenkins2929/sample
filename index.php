<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Ideal Admin & Student Login</title>
</head>
<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <h1>IDEAL</h1>
                <p>INSTITUTE OF TECHNOLOGY</p>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="index.php" class="link active">Home</a></li>
                    <li><a href="about.php" class="link active">About</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <button onclick="studentlogin()" class="btn white-btn" id="studentBtn">Student</button> 
                <button onclick="adminlogin()" class="btn black-btn" id="adminBtn">Admin</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <div class="form-box">
            <!-- Student login -->
            <form action="login_student.php" method="POST" class="Studentlogin-container" id="student-login">
                <div class="top">   
                    <header>STUDENT LOGIN</header>
                    <span>Are you an Admin? Log in here!<a href="#" onclick="adminlogin()">Admin</a></span>
                </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Register number" name="student_username">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Password" name="student_password">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Sign In">
                    </div>
            </form>

            <!-- Admin login -->
            <form action="login_admin.php" method="POST" class="Adminlogin-container" id="admin-login">
                <div class="top"> 
                    <header>ADMIN LOGIN</header>
                    <span>Are you a Student? Log in here!<a href="#" onclick="studentlogin()">Student</a></span>
                </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Email Id" name="admin_username">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Password" name="admin_password">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Sign In">
                    </div>
            </form>
        </div>
    </div>   

    <script>
        function myMenuFunction() {
            var i = document.getElementById("navMenu");

            if(i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }

        function studentlogin() {
            var studentLogin = document.getElementById("student-login");
            var adminLogin = document.getElementById("admin-login");
            var studentBtn = document.getElementById("studentBtn");
            var adminBtn = document.getElementById("adminBtn");

            studentLogin.style.left = "4px";
            adminLogin.style.right = "-520px";
            studentBtn.classList.add("white-btn");
            adminBtn.classList.remove("white-btn");
        }

        function adminlogin() {
            var studentLogin = document.getElementById("student-login");
            var adminLogin = document.getElementById("admin-login");
            var studentBtn = document.getElementById("studentBtn");
            var adminBtn = document.getElementById("adminBtn");

            studentLogin.style.left = "-510px";
            adminLogin.style.right = "5px";
            studentBtn.classList.remove("white-btn");
            adminBtn.classList.add("white-btn");
        }
    </script>
</body>
</html>
