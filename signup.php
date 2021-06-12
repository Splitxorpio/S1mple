<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./phpcss.css">
    <link rel="stylesheet" href="./SIDEBAR.CSS">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <div class="logo-container">
        <img src="logo.png" style="width: 100px; height: 100px; margin: 0;">
        <h1>Sign Up</h1>
        <hr>
    </div>
    <div class="container d50">
        <div class="form-holder">
            <form action="register.php" method="post">
                <label>Username:</label>
                <input type="text" name="username" id="username" alt="Username" placeholder="Username">
                <br>
                <label>Password:</label>
                <input type="password" name="password" id="password" alt="Username" placeholder="Password">
                <br>
                <div class="container">
                    <input type="submit" name="register" value="Sign Up" class="submit-btn"></input>
                </div>
            </form>
        </div>
    </div>
    <button class="openbtn" onclick="openNav()">&#9776;</button>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <img src="logo.png">
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Courses</a>
        <a href="#">Discussions</a>
        <a href="login.php">Sign In</a>
    </div>
</body>

</html>