<!DOCTYPE html>
<?php 
$cookie_name="user";
$cookie_value="Rojina Tiwari";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "cookie named ".$cookie_name."is not set!";
    }else
    {
        echo"cookie". $cookie_name ."is set! <br>";
        echo "value is ".$_COOKIE[$cookie_name];
    }
    ?>
    <p><strong>Note:</strong>
       You might have to reload the page to see the value of the cookie.</p>
    
</body>
</html>