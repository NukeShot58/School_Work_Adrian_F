<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Grupa A 
    $tab = array();
    for($i = 1; $i <=100 ; $i++){
        array_push($tab,$i);
    }
    
    echo addArray($tab);

    function addArray($arr){
        $suma = 0;
        for($i = 0; $i < count($arr); $i++){
            $suma += $arr[$i];
        }
        return $suma;
    }
    ?>
</body>
</html>