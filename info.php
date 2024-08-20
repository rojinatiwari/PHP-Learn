 <!-- 
  //CREATE DATABASE 
  user_info;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL
    CREATE DATABASE user_info;
    nationality VARCHAR(255) NOT NULL,
    marks VARCHAR(255) NOT NULL); -->

<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit();}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_info";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $nationality = $_POST['nationality'];
    $marks = $_POST['marks'];
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, nationality, marks) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $nationality, $marks);
    if ($stmt->execute()) {
        echo "Information saved successfully.<br>";
        echo '<a href="display.php">View Information</a>';
    } else {
        echo "Error: " . $stmt->error;    }
        $stmt->close();}
        $conn->close();
        ?>
        