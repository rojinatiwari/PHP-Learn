<?php
$servername = "localhost";
$username = "username";
$password = "";

// create connection
$conn = mysqli_connect($servername,$username,$password);

//check connection
if(!$conn)
{
    die("connection failed :".mysqli_connect_error());
}
echo" connected successfully";

//create database
$sql = "CREATE DATABASE db_student";
if(mysqli_query($conn,$sql))
{
    echo"database created sucessfully";
}else{
    echo"error creating database".mysqli_error($conn);
}

//creating table 
$sql = "CREATE TABLE tbl_student(id INT (6)UNSIGNED AUTO_INCREMENT PRIMARY KEY , firstName VARCHAR(30)NOT NULL,lastName VARCHAR(30)NOT NULL)";
if(mysqli_query($conn,$sql))
{
    echo"Table tbl_student created successfully";
}else{
    echo"Error creating table : ".mysqli_error($conn);
}

mysqli_close($conn);
?>


