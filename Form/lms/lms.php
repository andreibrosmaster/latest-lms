
<?php
session_start();
include 'hello_user.php'; // Include the file that sets $username
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
</head>
<body>
   

<div class="header" id="header">
    <div class="logo">
      <!-- Place your logo here -->
      <img src="logo-ncu.png" alt="" class="logo-ncu">    
      <span class="company-name">NICENE UNIVERSITY</span>
    </div>



    <div class="user-greeting">
    <p>Hello, <span id="username"><?php echo $usernameForHTML; ?></span></p>
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

    <!-- JavaScript -->
    <script src="lms.js"></script>
</body>
</html>