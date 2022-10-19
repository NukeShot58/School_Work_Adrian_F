<?php 
$cookie_last_visit = date('d/m/Y h:i');
setcookie('last_visit', $cookie_last_visit, time() + (86400 * 30), "/");
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
    <?php 
    if(!isset($_COOKIE['last_visit'])){
        echo 'Ostatnio odwiedzono strone: ' . 'Odwiedzasz stronę pierwszy raz';
    }else{
        echo 'Ostatnio odwiedzono strone: ' . $_COOKIE['last_visit'];
    }
    
    ?>
</body>
</html>