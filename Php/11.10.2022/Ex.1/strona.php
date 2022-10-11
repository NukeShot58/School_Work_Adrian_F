<?php
    if(!isset($_SESSION['user_login'])){
        header('Location: loguj.php');
    } 
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>Welcome to our page!</h1>
    <h3>Jestes zalogowany jako: <?php echo $_SESSION['user_login']; ?></h3>
    <a href="wyloguj.php">Logout!</a>
</body>
</html>