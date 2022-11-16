<?php 
session_start();
?>

<?php 
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit();
}
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
    //unset($_SESSION['user']);
    ?> </p>
    <a href="wyloguj.php">Wyloguj</a>

    <h2>Wybierz operacje do wykonania</h2>
    <form action="" method="post">
        <input type="submit" value="Pokaż użytkowników" name="show">
    </form>
    <?php
        if(isset($_POST["show"])){
            require_once('funkcje.php');

            show_users();
        }
    ?>
</body>
</html>