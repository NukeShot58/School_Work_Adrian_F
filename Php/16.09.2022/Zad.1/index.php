<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <?php 
    $height = 5;
    $width = 5;
    for($i = 1; $i <= $height; $i++){
        $text = "";
        echo "<div>";
        for($j = 1; $j <= $width; $j++){
            if($j == 1 || $j == $width || $i == 1 || $i == $height){
                $text =$text . '*';
                //echo '*';
            }else{
                $text =$text . '  ';
                //echo ' '; 
            }
        }
        echo $text . "</div>";
    }

    
    ?>
</body>
</html>