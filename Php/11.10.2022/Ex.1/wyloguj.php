<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    session_start();
    unset($_SESSION['user_login']);
    session_destroy();

    echo '<h3>You have logged out of the system!</h3>';
    echo '<a href="loguj.php">Zaloguj się ponownie!</a>';
    ?>
</body>
</html>