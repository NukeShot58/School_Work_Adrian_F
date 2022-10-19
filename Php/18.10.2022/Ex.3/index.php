<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="t1">
        <input type="submit" value="Wyślij">
    </form>
    <?php
        if(isset($_POST['t1']) && $_POST['t1'] != ""){
            $text = $_POST['t1'];
            setcookie('form_text', $text,time() + (86400 * 30), '/');
        }
        if(isset($_COOKIE['form_text'])){
        echo($_COOKIE['form_text']);
        }else if(isset($text)){
            echo $text;
        } 
    ?>
</body>
</html>