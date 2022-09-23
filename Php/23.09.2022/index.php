<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Grupa b -->
    <?php 
    $l1 = 3;
    $sred = 0;
    for($i = 0, $j = $l1+1; $i < 100;$j++ ){
        if($j%2 == 1){
            $sred += $j;
            $i++;
        }
    }
    $sred /= 100;
    echo('Wynik: ' . $sred);
    ?>
</body>
</html>