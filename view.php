<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM stud";
$result = $conn->query($sql);

?> -->


<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "krish@123";
$dbname = "student_pbl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // You should use prepared statements and password hashing in production
    $sql = "SELECT * FROM stud WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['prn'] = $row['prn'];
        $_SESSION['roll'] = $row['roll'];
        $_SESSION['year'] = $row['year'];
        $_SESSION['course'] = $row['course'];
        
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.html?error=1");
        exit();
    }
}
$conn->close();
?>