
<?php
session_start();

//walidacja danych formularza
if(isset($_POST['zaloz'])){
    $imie = $_POST['imie'];
    
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];

    $walidacja = true;

    if(strlen($imie)<3){
        $walidacja = false;
        $_SESSION['imie_error'] = 'Wpisz poprawne imie';
    }

    if(strlen($nazwisko)<3){
        $walidacja = false;
        $_SESSION['nazwisko_error'] = 'Wpisz poprawne imie';
    }

    if(!ctype_alnum($login)){
        $walidacja = false;
        $_SESSION[ 'login_error'] = 'Login musi sie skladac z liter i cyfr (bez polskich znakow)';
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $walidacja = false;
        $_SESSION['email_error'] = 'Wpisz poprawny adres email';
    }

    if($haslo1 != $haslo2){
        $walidacja = false;
        $_SESSION['pass_error'] = 'Podane hasla sa rozne';
    }

    if($walidacja){
        require_once('conn.php');

            mysqli_report(MYSQLI_REPORT_STRICT);
            try{
                $polaczenie = new mysqli($servername, $username, $password, $dbname);
            }
            catch(mysqli_sql_exception $e){
                $_SESSION['error'] = $e;
                header('Location: index.php');
                exit();
            }

             //zabezpieczenia
             $login = htmlentities($login);
             $haslo1 = htmlentities($haslo1);
             $login = $polaczenie->real_escape_string($login);
             $haslo1 = $polaczenie->real_escape_string($haslo1);

             //sprawdzamy czy login jest zajety
             $zapytanie = "SELECT login FROM users WHERE login='$login'";
             $wynik = $polaczenie->query($zapytanie);
             if($wynik->num_rows >0){
                $_SESSION['login_error'] =  'Podany login jest zajety. W pisz inny';
             }else{
                $haslo1 = password_hash($haslo1,PASSWORD_DEFAULT);
                $zapytanie2 = "INSERT INTO users VALUES(NULL, '$imie', '$nazwisko', '$login', '$haslo1', '$email')";
               if($polaczenie->query($zapytanie2)){
                header('Location: index.php');
               }else{
                   echo 'Nie udalo sie';
               }
                
             }
             $polaczenie->close();
    }

}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial;
            background-color: cornsilk;
        }

        form>input{
            display: block;
            margin: 20px;
        }

        div.error{
            color: red;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <h2>Wpisz dane do rejestracji.</h2>
    <form action="register.php" method="post">
        <input type="text" name="imie" placeholder="Imie">
        <div class="error">
            <?php
            if(isset($_SESSION['imie_error'])){
                echo($_SESSION['imie_error']);
            unset($_SESSION['imie_error']);
    }
            ?>
        </div>
        <input type="text" name="nazwisko" placeholder="Nazwisko">
        <div class="error">
            <?php
            if(isset($_SESSION['nazwisko_error'])){
                echo($_SESSION['nazwisko_error']);
            unset($_SESSION['nazwisko_error']);
    }
            ?>
        </div>

        <input type="login" name="login" placeholder="Login">
        <div class="error">
            <?php
            if(isset($_SESSION['login_error'])){
                echo($_SESSION['login_error']);
            unset($_SESSION['login_error']);
    }
            ?>
        </div>

        <input type="text" name="haslo1" placeholder="Haslo">
        <input type="text" name="haslo2" placeholder="Powtórz hasło">
        <div class="error">
        <?php
            if(isset($_SESSION['pass_error'])){
                echo($_SESSION['pass_error']);
            unset($_SESSION['pass_error']);
    }
            ?>
        </div>

        <input type="email" name="email" placeholder="E-mail">
        <div class="error">
        <?php
            if(isset($_SESSION['email_error'])){
                echo($_SESSION['email_error']);
            unset($_SESSION['email_error']);
    }
            ?>
        </div>
        <input type="submit" value="Załóż konto" name="zaloz">
    </form>
</body>
</html>
