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
    $liczba = 10;
    if($liczba == 0) echo 'Liczba jest równa 0';
    elseif($liczba > 0) echo 'Liczba jest większa od 0';
    else echo 'Liczba jest mniejsza od 0';
    ?>

    <?php 
    echo '<br>';
    $a = 0;
    if($a == 0) :
    ?>
    <h1>Test</h1>
    <?php 
    endif;
    ?>
    <br>
    <h1>Zad.1</h1>
    <?php
    $promien = 5;

    $obw = 2 * pi() * $promien;
    $pol = (pi() * $promien)**2;
    echo("<div>Obwód koła: $obw</div>");
    echo("<div>Pole koła: $pol</div>");
    ?>
    <br>
    <?php 
    $x = 5;
    $a = 2;
    $b = 3;
    $y = $a * $x - $b;
    echo 'Wynik: ' . $y
    ?>
    <br>
    <h1>Switch Case</h1>

    <?php 
    $liczba = 3;
    $text = '';
    switch($liczba){
        case 1:
            $text = "Poniedziałek";
        break;
        case 2:
            $text = "Wtorek";
        break;
        case 3:
            $text = "Środa";
        break;
        case 4:
            $text = "Czwartek";
        break;
        case 5:
            $text = "Piątek";
        break;
        case 6:
            $text = "Sobota";
        break;
        case 7:
            $text = "Niedziela";
        break;
        default:
            $text = 'Nie ma takiego dnia tygodnia!';
        break;
    }
    echo $text;

    ?>
</body>
</html>