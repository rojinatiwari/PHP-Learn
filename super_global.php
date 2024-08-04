<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="demo_request.php">
        Name:<input type="text" name="fname">
        <input type="sunmit" >
    </form>
    
</body>
</html>
<?php 
$name =$_REQUEST['fname'];
echo $name;
?>