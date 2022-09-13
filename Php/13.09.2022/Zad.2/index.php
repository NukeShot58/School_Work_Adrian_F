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
    const CENA = 5;
    const SPALANIE = 8;

    $trasa = 320;
    
    $wynik = ($trasa/100) * SPALANIE * CENA;
    echo $wynik;
    ?>
</body>
</html>