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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == $correct_username && $password == $correct_password) {
            $_SESSION['loggedin'] = true;
            header("Location: info_form.html");
            exit();
        } else {
            echo "Invalid credentials.";
        }}
    ?>
    