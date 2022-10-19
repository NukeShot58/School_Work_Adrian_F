<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <textarea name="opinia"></textarea>
        <input type="submit" value="zapisz opinie">
    </form>

    <?php 
    if(isset($_POST['opinia'])){
        $opinia = $_POST['opinia'].PHP_EOL;

        file_put_contents('plik.txt', $opinia, FILE_APPEND | LOCK_EX);
        $tab = explode(PHP_EOL, file_get_contents('plik.txt'));
        foreach($tab as $t){
            echo "<br>$t<br>";
        }
    }
    
    ?>
</body>
</html>