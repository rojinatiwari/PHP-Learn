<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
} else {
    $_SESSION['counter'] = 1;
}
$msg = "You have visited this page " . $_SESSION['counter'] . " in this session";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting up a PHP session </title>
</head>

<body>
    <?php
    echo ($msg);
    session_destroy();
    ?>

</body>

</html>