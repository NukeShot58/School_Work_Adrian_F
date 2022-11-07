<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            background-color: cornsilk;
        }

        a{
            color: chocolate;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Witaj w naszym serwisie! Życzymy miłej pracy</h2>
    <p>Jesteś zalogowany jako: <?php echo $_SESSION['user'];
    unset($_SESSION['user']);
    ?> </p>
    <a href="wyloguj.php">Wyloguj</a>
</body>
</html>