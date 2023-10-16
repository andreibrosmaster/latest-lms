<?php
require_once('connection.php');
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);
$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NCU LMS</title>
  <link rel="stylesheet" href="lms.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="fetch_courses.css">
</head>
<body>
   

<div class="header" id="header">
    <div class="logo">
      <!-- Place your logo here -->
      <img src="logo-ncu.png" alt="" class="logo-ncu">    
      <span class="company-name">NICENE UNIVERSITY</span>
    </div>


   <!--USERNAME SHOW---->
    <div class="user-greeting">
    <p>Hello, Student<span id="username"></span></p>
    </div>

  </div>
  <div class="sidebar">
    <ul class="menu">
      <li><a href="#"><ion-icon name="home-outline"></ion-icon></a></li>
      <li><a href="calendar.php"><ion-icon name="calendar-outline"></ion-icon></a></li>
      <li>
        <form action="logout.php" method="post" name="logout">
          <button type="submit" name="logoutBtn"><ion-icon name="log-out-outline"></ion-icon></button>
        </form>
      </li>
    </ul>
  </div>

  <div class="container-lms">
  <?php

  //
      //PRACTICE 
  
  //
      if(empty($courses)){
        echo '<p>No Courses Available</p>';
      } else{
        foreach ($courses as $course) {
          $imagePath = 'upload-img/' . strtolower($course['course_name']). '.JPEG';

          echo '<div class="box box-' . strtolower($course['course_name']) . '" id="box1">';
          echo '<a href="' . strtolower($course['course_name']) . '.html"></a>';
           if (file_exists($imagePath)) {
        echo '<img src="' . $imagePath . '" alt="' . $course['course_name'] . '">';
    } else {
        echo 'Image not found.';
    }
          echo '<div class="box-content">';
          echo '<h2 id="courseName1">' . $course['course_name'] . '</h2>';
          echo '<p style="font-size: 12px;"> ' . strtolower($course['course_name']) . '.</p>';
          echo '</div>';
          echo '</div>';
      }
      
      }

        ?>

  </div>  <!-- JavaScript -->
    <script src="lms.js"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
</body>
</html>