<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST['edit'])) {
        // Edit code
        $id = $_POST['id'];
        $username = $_POST['username'];
        $f_name = $_POST['firstname'];
        $l_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $agree = 1;

        // Establish Connection
        $db_host = "localhost"; // Change this to your database host
        $db_user = "root";      // Change this to your database username
        $db_pass = "";          // Change this to your database password
        $db_name = "register";  // Change this to your database name

        // Create a connection to the database
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        // Check the connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect!";
            exit();
        } else {
            // Update user data in the database using a unique identifier, e.g., user ID
            $sql = "UPDATE `users` SET username = '$username', first_name = '$f_name', last_name = '$l_name', email = '$email', password = '$password', agree = '$agree' WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '<script>window.location = "dashboard.php";</script>';
                exit();
            } else {
                die(mysqli_error($conn));
            }
        }
    }
}

?>
