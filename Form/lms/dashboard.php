<?php

require_once('connection.php');
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);


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
    <p>Hello, <span id="username">superadmin</span></p>
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
            <h2>Add Student</h2>
            <form id="createForm" name="createForm" action="create.php" method="POST">

           

                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" required>

                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="email">Temporary Password</label>
                <input type="text" id="password" name="password" required>

                

                <button type="submit" name="add">Add Student</button>
            </form>
        </div>

        <!-- Edit Function -->
        <div class="edit">
            <h2>Edit Student</h2>
            <form id="editForm" name="editForm" action="edit.php" method="POST">

            <label for="id">ID</label>
                <input type="number" id="id" name="id" required>

                
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" required>

                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" required>

                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>

                <label for="email">Change Password</label>
                <input type="text" id="password" name="password" required>

                <button type="submit" name="edit">Edit Data</button>
            </form>
        </div>

        <!-- Delete Function -->
        <div class="delete">
            <h2>Delete Record</h2>
            <form id="deleteForm" name="deleteForm" action="delete.php" method="POST">
                <label for="delete_course_id">Course ID:</label>
                <input type="number" id="delete_course_id" name="delete_course_id" required>

                <button type="submit" name="delete">Delete</button>
            </form>
        </div>
    </div>
</div>

<div class="container_table">
  <div class="db-table">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h2 class="display-6">STUDENT DATABASE</h2>
          </div>
          <div class="card-body">
            <table>
              <tbody>
                <tr class="bg-dark text-white">
                  <td> ID </td>
                  <td> USERNAME</td>
                  <td> FIRST NAME</td>
                  <td> LAST NAME </td>
                  <td> EMAIL </td>
                </tr>
                <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                  ?>
              <td><?php echo $row['id'];  ?> </td>
              <td><?php echo $row['username'];  ?> </td>
              <td><?php echo $row['first_name'];  ?> </td>
              <td><?php echo $row['last_name'];  ?> </td>
              <td><?php echo $row['email'];  ?> </td>

                </tr>
              <?php
                }
                ?>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  

    <!-- JavaScript -->
    <script src="lms.js"></script>
</body>
</html>