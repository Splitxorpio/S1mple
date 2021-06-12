<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="phpcss.css">
    <link rel="stylesheet" href="SIDEBAR.CSS">
    <title>Document</title>
    <script src="script.js"></script>
</head>

<body>
    <div class="logo-container">
        <img src="logo.png" style="width: 100px; height: 100px; margin: 0;">
        <h1>Log In</h1>
        <hr>
    </div>
    <div class="container d50">
        <div class="form-holder">
            <form action="process.php" method="POST" autocomplete="off">
                <label>Username</label>
                <input class="" type="text" id="user" name="user"></input>
                <br>
                <label>Password</label>
                <input class="" type="password" id="pass" name="pass"></input>
                <div class="container">
                    <input class="" type="submit" id="btn" value="Login"></input>
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