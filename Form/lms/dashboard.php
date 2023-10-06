<?php
session_start();
include 'hello_user.php'; // Include the file that sets $username
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DASHBOARD</title>
  <link rel="stylesheet" href="lms.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
   

<div class="header" id="header">
    <div class="logo">
      <!-- Place your logo here -->
      <img src="logo-ncu.png" alt="" class="logo-ncu">    
      <span class="company-name">NICENE UNIVERSITY</span>
    </div>



    <div class="user-greeting">
    <p>Hello, <span id="username"><?php echo $username; ?></span></p>
    </div>
  </div>
  <div class="sidebar">
    <ul class="menu">
      <li><a href="#"><i class="fas fa-home"></i></a></li>
      <li><a href="#"><i class="fas fa-calendar"></i></a></li>
      <li>
        <form action="logout.php" method="post">
          <button type="submit" name="logoutBtn"><i class="fas fa-sign-out-alt"></i></button>
        </form>
      </li>
    </ul>
  </div>

  <div class="container">

  <div class="functions">
        <!-- Create Function -->
        <div class="create">
            <h2>Create Course</h2>
            <form id="createForm" name="createForm" action="connection.php" method="POST">
                <label for="course_name">Course Name:</label>
                <input type="text" id="course_name" name="course_name" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>

                <button type="submit">Create Course</button>
            </form>
        </div>

        <!-- Edit Function -->
        <div class="edit">
            <h2>Edit Course</h2>
            <form id="editForm" name="editForm" action="edit.php" method="POST">
                <label for="edit_course_name">Course Name:</label>
                <input type="text" id="edit_course_name" name="edit_course_name" required>

                <label for="edit_description">Description:</label>
                <textarea id="edit_description" name="edit_description" required></textarea>

                <button type="submit">Edit Course</button>
            </form>
        </div>

        <!-- Delete Function -->
        <div class="delete">
            <h2>Delete Course</h2>
            <form id="deleteForm" name="deleteForm" action="delete.php" method="POST">
                <label for="delete_course_id">Course ID:</label>
                <input type="number" id="delete_course_id" name="delete_course_id" required>

                <button type="submit">Delete Course</button>
            </form>
        </div>
    </div>
  </div>
  

    <!-- JavaScript -->
    <script src="lms.js"></script>
</body>
</html>