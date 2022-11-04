<?php 
session_start();
?>

<?php 
// if(isset[$_POST['login']] && !is_null($_POST['login']) && isset[$_POST['pass']]){
//     $login = $_POST['login'];
//     $pass = $_POST['pass'];
// }else{
//     $_SESSION['error'] = "Wpisz login i haslo";
//     header("Location: index.php");
//     exit();
// }
if(isset($_POST['loguj'])){
    if(empty($_POST['login']) || empty($_POST['pass'])){
        $_SESSION['error'] = "Wpisz login i haslo";
        header("Location: index.php");
        exit();
    }
}
?>

<?php 
$login = $_POST['login'];
$pass = $_POST['pass'];

require_once("conn.php");

mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $conn = new mysqli($servername,$username,$password,$dbname);
}
catch(mysqli_sql_exception $e)
{
    $_SESSION['error'] = $e;
    header("Location: index.php");
    exit();
}
//secure data
$login = htmlentities($login);
$pass = htmlentities($pass);
$login = $conn->real_escape_string($login);
$pass = $conn->real_escape_string($pass);

//verify login
$sql="SELECT login FROM users where login = '$login'";
$result = $conn->query($sql);
if($result->num_rows != 1){
    $_SESSION['error'] = 'Błędny login!';
    header("Location: index.php");
    exit();
}else{
    $sql="SELECT login FROM users where login = '$login' and haslo = '$pass'";
    $rekord = $conn->query($sql);
    if($rekord->num_rows == 1){
    $_SESSION['user'] = $login;
    header("Location: serwis.php");
    }else{
    $_SESSION['error'] = 'Błędne hasło!';
    header("Location: index.php");
    exit();
    }
}

?>