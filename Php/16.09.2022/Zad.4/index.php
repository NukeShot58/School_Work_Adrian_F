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
    $n = 10;
    $silnia = 1;
    for($i = 1; $i <= $n; $i++){
        $silnia *= $i;
    }
    echo 'Silnia jest równa: ' . $silnia;
    ?>
</body>
</html>