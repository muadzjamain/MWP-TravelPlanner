<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];

// Validate form data (optional, you can add your own validation logic here)

// Connect to the database
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "travelplanner";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert feedback into the database
$sql = "INSERT INTO feedback (name, email, date, time, message) VALUES ('$name', '$email', '$date', '$time', '$message')";

if ($conn->query($sql) === TRUE) {
    // Close the database connection
    $conn->close();

    // Redirect back to the previous page with a message
    header("Location: {$_SERVER['HTTP_REFERER']}?message=Thank%20you%20for%20your%20feedback");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
