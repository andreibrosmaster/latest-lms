// Establish Connection
$db_host = "localhost"; // Change this to your database host
$db_user = "root";      // Change this to your database username
$db_pass = "";          // Change this to your database password
$db_name = "register";  // Change this to your database name

// Create a connection to the database
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

