<?php
include "db.php";

if ($_GET['id']) {
  $id = (int)$_GET['id'];
  // echo $id;
  function RemoveSpecialChar($str) {
      
    // Using str_replace() function 
    // to replace the word 
    $res = str_replace( array( '\'', 'r\n'), ' ', $str);
      
    // Returning the result 
    return $res;
    }
  $myArrayCourse = array();
  if ($resultcourse = $conn->query("SELECT * FROM Courses WHERE `_id` = $id")) {
    while ($row = $resultcourse->fetch_array(MYSQLI_ASSOC)) {
      $myArrayCourse[] = $row;
    }
  }
}

$myArrayContent = array();
if ($resultcontent = $conn->query("SELECT content FROM Courses")) {
  while ($row = $resultcontent->fetch_all(MYSQLI_ASSOC)) {
    $myArrayContent[] = $row;
  }
  // $resultcontent->fetch_all(MYSQLI_ASSOC);
  // echo  json_encode($myArrayContent);
}

if (isset($_POST['courseid'])) {
  $del_id = (int)$_GET['id'];
  $delDataSql = "DELETE FROM Courses WHERE _id = $del_id";
  // header('Location: login.php');

  if (mysqli_query($conn, $delDataSql)) {
    header('Location: courses.php');
  }
}

if (isset($_POST['json'])) {
  $raw= $_POST['json'];
  // $json = RemoveSpecialChar($raw);
  $jsonSQL = "UPDATE Courses SET content='$raw' WHERE _id= $id";
  mysqli_query($conn, $jsonSQL);
  // echo json_encode($json);
}



?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="SIDEBAR.CSS">
  <script src="script.js"></script>
  <title>Course Dashboard</title>
  <link rel="icon" href="logo.png">
</head>

<body>
  <?php foreach ($resultcourse as $course) { ?>


    <h1 class="courses_title">Course Name: <?php echo $course['title'] ?></h1>

    <!-- <br>
    <hr class="course-container">
    <br> -->
    <div class="add-container" style="top: 30%;">
      <div class="form-container">
        <form class="form-group" autocomplete="off" action="deleteProject.php?id=<?php echo $course['_id'] ?>" method="POST">
          <label for="json">Content</label>
          <textarea class="form-control mb-2" height="height: 400px;" id="json" name="json"></textarea>
          <button type="submit" id="add-content" class="btn btn-primary">Add Content</button>
        </form>

        <form class="form-group" autocomplete="off" action="deleteProject.php?id=<?php echo $course['_id'] ?>" method="POST">
          <input name="courseid" style="display: none;" />
          <button type="submit" id="del-btn" class="btn btn-danger">Delete Course</button>
        </form>
      </div>
    </div>
  <?php } ?>
  <!-- <button class="openbtn" onclick="openNav()">&#9776;</button>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <img src="logo.png">
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="courses.php">Courses</a>
        <a href="#">Discussions</a>
        <a href="login.php">Sign In</a>
    </div> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="coursecreate.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>