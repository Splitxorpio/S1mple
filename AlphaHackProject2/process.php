<?php

include 'db.php';
$username = $_POST['user'];
$password = $_POST['pass'];


$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' and password = '$password'")
    or die("Failed to query database" . mysqli_error($link));
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./phpcss.css">
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="icon" href="logo.png">
</head>

<body>
    <div class="container d50">
        <div class="form-holder">
            <span class="emoji">👋</span>
            <h1>
                <?php
                if ($row['username'] == $username && $row['password'] == $password) {
                    echo " Hello " . $row['username'] . "!";
                } else {
                    header("Location:login.php");
                }
                ?>
            </h1>
            <br>
            <a class="btn" href="courses.php">Look For Courses!</a>
            <br>
            <a class="btn" href="index.html">Sign Out</a>
            <br>
            <a class="btn" href="./chat/index.php">Talk with others!</a>
        </div>
    </div>
</body>

</html>