<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST['edit'])) {
        // Edit code
        $id = $_POST['id'];
             $course_name = $_POST['course-name'];
             $course_description = $_POST['description'];
             $course_link = $_POST['course-link'];
            
             $image = $_FILES['image']['name']; // Get the filename of the uploaded image
             $image_tmp = $_FILES['image']['tmp_name']; // Get the temporary location of the uploaded image
             $image_path = 'C:/xampp/htdocs/webdev2/Index/Form/upload-img/' . $image; // Set the desired path to store the uploaded image

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
            $sql = "UPDATE `courses` SET course_name = '$course_name', course_description = '$course_description', link = '$course_link', image = '$image_path' WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '<script>window.location = "coursess.php";</script>';
                exit();
            } else {
                die(mysqli_error($conn));
            }
        }
        
    }
}

?>
