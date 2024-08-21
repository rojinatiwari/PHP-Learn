<!DOCTYPE html>
<?php

//setting cookie
$cookie_name = "user";
$cookie_value = "Rojina Tiwari";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

// delete cookie -> to delete a cookie ,use the setcookie() function with an expiration date in the past 
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);

//check if the cookie is enabled or disabled
setcookie("test_cookie", "test", time() + 3600, "/");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //check if the cookie is set or not set
    if (!isset($_COOKIE[$cookie_name])) {
        echo "cookie named " . $cookie_name . "is not set!";
    } else {
        echo "cookie  name " . $cookie_name . " is set! <br>";
        echo "value is " . $_COOKIE[$cookie_name] . "<br>";
    }

    //to delete the cookie
    echo "cookie 'user' is deleted <br>";

    // to check if the cookie is enabled or disabled
    if (count($_COOKIE) > 0) {
        echo "cookies are enabled";
    } else {
        echo "cookies are disabled";
    }
    ?>
    <p><strong>Note:</strong>
        You might have to reload the page to see the value of the cookie.</p>

</body>

</html>