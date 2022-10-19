<?php 
if(!isset($_COOKIE['visit_nr'])){
    setcookie('visit_nr', 1, time() + (86400 * 30), '/');
}else{
    setcookie('visit_nr',$_COOKIE['visit_nr'] + 1, time() + (86400 * 30), '/');
}
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
    if(!isset($_COOKIE['visit_nr'])){
        echo 'Odwiedzono strone ' . '0 ' . 'razy.';
    }else{
        echo 'Odwiedzono strone ' . $_COOKIE['visit_nr'] . ' razy.';
    }
    ?>
</body>
</html>