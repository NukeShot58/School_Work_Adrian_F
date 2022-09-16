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
    $a = 120;
    $b = 300; 
    
    while($b != 0){
       $c = $a % $b;
       $a = $b;
       $b = $c; 
    }

    echo $a;
    ?>
</body>
</html>