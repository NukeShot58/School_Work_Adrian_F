
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zaloguj się!</h1>
    <form  method="post">
        <input type="text" name="login">
        <br>
        <input type="password" name="passwrd">
        <br>
        <input type="submit" value="Zaloguj się">
    </form>
    <?php 
    session_start();
    if(isset($_POST['login'])){
        if(empty($_POST['login'] || empty($_POST['passwrd']))){
            echo 'Wprowadź dane logowania!';
        }else
        {
            $_SESSION['user_login'] = $_POST['login'];
            header('Location: strona.php');
        }
    }
    ?>
</body>
</html>