<?php 
    include "db.php";

    if ($_GET['id']) {
      $id = (int)$_GET['id'];
      // echo $id;
    
      $myArrayCourse = array();
      if ($resultcourse = $conn->query("SELECT * FROM courses WHERE `_id` = $id")) {
        while ($row = $resultcourse->fetch_array(MYSQLI_ASSOC)) {
          $myArrayCourse[] = $row;
        }
      }
      $result = $myArrayCourse[0];
      $course = $result['content'];
      // echo json_encode(var_dump($course));
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
  <link rel="stylesheet" href="coursesstyle.css">
  <title>Java Script Course</title>
  <link rel="icon" href="logo.png">
</head>

<body>
  <a href="courses.php"><i class='fas fa-times' style='font-size:36px'></i></a>
  <div class="container">
    <h1 class="python_title">Start Learning <?php echo $result['title'] ?> Now!</h1>
    <div class="course-container">
      <p><?php echo $course; ?></p>
  </div>
    
    <!-- <div class="course-container">
      <h3></h3>
      <hr>
      <P>Java Script is an assesntial for doing any web devlopment. Java Script is great for adding animations and functionality to your website. It is also one of the most beginner friendly languages to date!
      </P>The first program you will learn is to print "hello world" to the console
      <img class="js_screenshot" src="https://cdn.discordapp.com/attachments/851987565066453005/853417031436992512/Screen_Shot_2021-06-12_at_7.34.31_PM.png">
      <br>
      <br>
      <p>and then run your code, you should get an output that says:</p>
      <img class="js_screenshot" src="https://media.discordapp.net/attachments/851987565066453005/853420091228160010/Screen_Shot_2021-06-12_at_7.33.24_PM.png" alt="">
      <br><br>
      <p>The next thing you are going to learn are variables and Strings. Think of variables as a bucket, and strings are the things inside of the bucket. </p>
      <img class="js_screenshot" src="https://media.discordapp.net/attachments/851987565066453005/853423260825944070/Screen_Shot_2021-06-12_at_7.59.11_PM.png" alt="">
      <br>
      <br>
      <p>Using the "let" keyword helps define the variable, the variable is name and the string stored in name is "stacy"</p>
      <p>So if we do console.log(name);, instead of name it will output what is in name. AKA Stacy.</p>
      <img class="js_screenshot" src="https://media.discordapp.net/attachments/851987565066453005/853423993105285130/Screen_Shot_2021-06-12_at_8.02.11_PM.png">
      <hr>
      <h3>Significance of Java Script</h3>
      <hr>
      <p>If you are a beginner, Java Script is a great language to start off with. It has libraries that are so usefull and simple its unreal, it is perfect when it comes to Web Devolopment and many other things.
        Java Script has pros and cons, but when it comes to beginner coding, Java Script is a great language to start with.
      </p>
      <hr>
    </div> -->
    <!-- <div class="course-container">
      <h3>Operators</h3>
      <hr>
      <p>Like Java Script, Operators are to add/subtract/multiply/divide two <strong>integers </strong>or <strong>floats</strong>.
        the '+' operator is for adding, the '-' operator is for subtracting, the '*' operator is for multiplying, and the '/' operator is for dividing.
      </p>
      <img src="https://media.discordapp.net/attachments/851987565066453005/853425708398411826/Screen_Shot_2021-06-12_at_8.08.59_PM.png">
      <hr>
    </div>
    <div class="course-container">
      <h3>Loops</h3>
      <hr>
      <p>A for loop is a Java Script statement that loops what ever is inside of it a certain amount of times. This is extremely useful if you find yourself repeating code.</p>
      <img src="https://media.discordapp.net/attachments/851987565066453005/853427207934181406/Screen_Shot_2021-06-12_at_8.14.56_PM.png">
      <p>In this case, it will print brandon 7 times, since there are seven characters in 'brandon'</p>

    </div>
    <div class="course-container">
      <h3>If Statements</h3>
      <hr>
      <p>If statements are to compare things, if one thing is equal to another, then ouput something.</p>
      <img src="https://media.discordapp.net/attachments/851987565066453005/853430356269858826/Screen_Shot_2021-06-12_at_8.27.29_PM.png">
      <p>This should output "joker is a bad person"</p>
      <br>
      <hr>
    </div>
    <div class="course-container">
      <hr>
      <h3>Functions</h3>
      <p>Functions is when Java Script gets fun, Functions are the main part of everything and is what makes a language do stuff. You must define the function, and then call it. A function can be called anytime after it has been defined.
        Functions allow developers to do certain tasks, so lets get started.
        to define it you do:
      </p>
      <img class="function_pic" src="https://media.discordapp.net/attachments/833516878299004928/853431029272805376/Screen_Shot_2021-06-12_at_8.30.08_PM.png">
      <p>
        After defining, you put what you want the function to do, so lets make it print hello world like before
      </p>
      <img class="function_pic" src="https://media.discordapp.net/attachments/851987565066453005/853432251920154624/Screen_Shot_2021-06-12_at_8.35.01_PM.png">
      <p>
        After that, we call it.
      </p>
      <img class="function_pic" src="https://media.discordapp.net/attachments/851987565066453005/853433206221045780/Screen_Shot_2021-06-12_at_8.38.48_PM.png">
      <p>
        Now run the code and you should get, "hello world"
      </p>
      <hr>
      <p>Congrats! You have finished the course!</p>
      <a href="courses.php">Go Back</a>
    </div>
  </div> -->
  <script src="ace.js" type="text/javascript" charset="utf-8"></script>
  <script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/javascript");
  </script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>