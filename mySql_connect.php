<?php


// Create connection
$servername = "localhost";
$username = "root"; // Default MySQL username is usually 'root'
$password = ""; // Default password is usually empty for 'root' on a local server
$db_name = "db_student";

$conn = mysqli_connect($servername, $username, $password);





// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

// Create database
$sql = "CREATE DATABASE db_student";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the database
mysqli_select_db($conn, "db_student");

// Create table
$sql = "CREATE TABLE tbl_student (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table tbl_student created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>
