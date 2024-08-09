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
mysqli_close($conn);
?>