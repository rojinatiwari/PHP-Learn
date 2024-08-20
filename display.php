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
$sql = "SELECT id, name, email, phone, nationality, marks FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Nationality</th><th>Marks</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["nationality"]. "</td><td>" . $row["marks"]. "</td></tr>";    }
    echo "</table>";
} else {
    echo "0 results";}
    $conn->close();
    ?>
    