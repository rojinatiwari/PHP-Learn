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
//insert data
$sql = "INSERT INTO tbl_student(firstname,lastname,email)VALUES('Rojina','Tiwari','rojina@gmail.com','Pokhara')";

if(mysqli_query($conn,$sql)){
echo "New record created successfully";
}
else
{
echo "Error :".$sql."<br>" . mysqli_error($conn);
}

//select data
$sql = "SELECT id,firstname ,lastname FROM tbl_student";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    //output data of each row
    while($row = mysqli_fetch_assoc($result)){
        echo"id;".$row["id"]."Name:".$row["firstname"].$row["lastname"]."<br>";
    }
    else
    {
    echo"0 results";
}

}
//update database
$sql = "UPDATE tbl_student SET lastname ='Ram' WHERE id = 2";
if(mysqli_query($conn,$sql)){
    echo"Record updated successfully!";
}else{
    "Error updating record :".mysqli_erroe($conn);
}

//delete database
$sql="DELETE FROM tbl_student WHERE id=3 ";
if($mysqli_query($conn,$sql))
{
    echo"Record deeted successfully";

}else{
    echo"Error deleting record:".mysqli_error($conn);

}
//insert multiple data
$
mysqli_close($conn);
?>

