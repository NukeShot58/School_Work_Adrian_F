<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwis</title>
    <style>
        body{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            background-color: cornsilk;
        }

        .form{
            display:flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: column;
        }

        input{
            display: block;
            margin: 20px;
        }

        a{
            color: chocolate;
            text-decoration: none;
        }
        
        .error{
            color: red;
            border: 1px solid red;
            padding:10px 25px;
        }
    </style>
</head>
<body>
    <h2>Witaj, zaloguj się do serwisu!</h2>
    <div class="form">
        <form method="post" action="login.php">
            <input type="text" name="login" >
            <input type="password" name="pass">
            <input type="submit" value="zaloguj się" name="loguj">
        </form>
        <?php 
        if(isset($_SESSION['error'])):
        ?>
         <div class="error">
            <?php echo $_SESSION['error']; 
                unset($_SESSION['error']);
            ?>
            
         </div>
        <?php endif; ?>
        <p>Nie masz konta? <a href="register.php">Utwórz konto</a></p>
    </div>
    
</body>
</html>