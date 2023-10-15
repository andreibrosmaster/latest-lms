<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST['add'])) {
        // Registration code
        $username = $_POST['username'];
        $f_name = $_POST['firstname'];
        $l_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $agee = 1;
    

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

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
                    // Insert user data into the database
                    $sql = "INSERT INTO `users` (username, first_name, last_name, email, password, agree) VALUES ('$username', '$f_name', '$l_name', '$email', '$hashed_password', '$agree')";
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
