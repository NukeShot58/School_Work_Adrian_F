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
    $from = 5;
    $to = 27;
    for($i = 1; $i < ($to - $from + 1); $i++){
        if(($from + ($i - 1)) % 5 == 0 ){
            echo ($from + ($i - 1)) . ", ";
        }
    }
    ?>
</body>
</html>