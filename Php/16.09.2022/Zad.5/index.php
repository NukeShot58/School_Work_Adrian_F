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
    $base_dot_amount = 1;
    if($height % 2 == 0){
        $base_dot_amount = 2;
    }
    for($i = 1; $i <= $height; $i++){
        $text = "";
        echo "<div>";
        $whitespaces = "";
        
        for($j = 1; $j <= ($height*2 - ($base_dot_amount + (($i - 1) * 2)));$j++ ){ //Calculate white space (Works as intended)
            $whitespaces = $whitespaces . " ";
        }
        $text = $text . $whitespaces;
        for($j = 1; $j <= ($base_dot_amount + (($i - 1) * 2)); $j++){ //Calculates dot amount (Works as intended)
            $text = $text . '*';
        }
        $text = $text . $whitespaces;
        echo $text . "</div>";
    }

    
    ?>
</body>
</html>