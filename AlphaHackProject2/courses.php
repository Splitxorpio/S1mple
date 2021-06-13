<?php
include "db.php";

if (isset($_POST['title'])) {
  $title = $_POST['title'];
  $link = 'coursetemplate.php';
  $logo_link = $_POST['logo_link'];
  $insertQuery = "INSERT INTO Courses (title, link, logo_link) VALUES ('$title', '$link', '$logo_link')";

  mysqli_query($conn, $insertQuery);
}
$myArray = array();
if ($result = $conn->query("SELECT * FROM Courses")) {
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $myArray[] = $row;
  }
  // echo json_encode($myArray);
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
  <script src="https://kit.fontawesome.com/18cc79072b.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <title>Courses</title>
  <link rel="icon" href="logo.png">
</head>

<body>
  <h1 class="courses_title">Learn Something New!</h1>
  <section class="coursetwo-container" id="container">
    <div class="card py">
      <img class="pythoncard_img" src="Python_logo_icon.png" alt="">
      <div class="card-body">Python basics</div>
      <a href="pythonpage.html" class="btn btn-primary">Start Course</a>
    </div>
    <div class="card py">
      <img class="pythoncard_img" src="JS.png" alt="">
      <div class="card-body">JS basics</div>
      <a href="javascriptcourse.html" class="btn btn-primary">Start Course</a>
    </div>
    <div class="card py">
      <img class="pythoncard_img" src="html.png" alt="">
      <div class="card-body">WebBasics</div>
      <a href="webbasics.html" class="btn btn-primary">Start Course</a>
    </div>
    <?php foreach ($result as $course) { ?>

      <div class="card py" onclick="
        <?php if($course['content']){ ?>
          javascript:void(0)
        <?php } else {  ?>
          navigateProp(<?php echo $course['_id']  ?>)
        <?php }  ?>
      ">
        <img class="pythoncard_img" src=<?php echo $course['logo_link'] ?> alt="">
        <div class="card-body"><?php echo $course['title'] ?></div>
        <a href='<?php echo $course['link'] ?>?id=<?php echo $course['_id'] ?>' class="btn btn-primary">Start Course</a>
      </div>
      <!-- </a> -->
    <?php } ?>
  </section>
  <br>
  <hr class="course-container">
  <br>
  <div class="add-container">
    <div class="form-container">
      <form class="form-group" autocomplete="off" action="courses.php" method="POST">
        <label for="exampleInputtext1">Title</label>
        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="title">

        <!-- <div class="form-group">
          <label for="exampleInputtext2">Link</label>
          <input type="text" class="form-control" id="exampleInputtext2" aria-describedby="textHelp" name="link">
        </div> -->
        <div class="form-group">
          <label for="exampleInputtext3">Logo Link</label>
          <input type="text" class="form-control" id="exampleInputtext3" aria-describedby="textHelp" name="logo_link">
        </div>
        <!-- <div class="form-group">
          <label for="exampleInputtext2">Body (Content)</label>
          <input type="text" class="form-control" id="exampleInputtext2" aria-describedby="textHelp">
        </div> -->
        <!-- <div class="form-group">
          <label for="exampleInputtext3">Course</label>
          <input type="text" class="form-control" id="exampleInputtext3" aria-describedby="textHelp">
        </div> -->
        <button type="submit" id="add-btn" class="btn">Creat Course</button>
      </form>
    </div>
  </div>
  <button class="openbtn" onclick="openNav()">&#9776;</button>
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <img src="logo.png">
    <a href="index.html"><i class="fas fa-house-user"></i> Home</a>
    <a href="about.html"><i class="fas fa-question"></i> About Us</a>
    <a href="login.php"><i class="fas fa-sign-in-alt"></i> Sign In</a>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="coursecreate.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>