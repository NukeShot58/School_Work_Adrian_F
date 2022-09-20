<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <select name="sel">
            <option value=1>Dodawanie</option>
            <option value=2>Odejmowanie</option>
            <option value=3>Mnożenie</option>
            <option value=4>Dzielenie</option>
        </select>
        <input type="number" name="l1" placeholder="Podaj pierwszą liczbę">
        <input type="number" name="l2" placeholder="Podaj drugą liczbę">
        <button type="submit">Oblicz</button>
    </form>
    <?php 
    function suma($a, $b){
        return $a+$b;
    }

    function roznica($a, $b){
        return $a-$b;
    }

    function mnozenie($a, $b){
        return $a*$b;
    }

    function dzielenie($a, $b){
        return $a/$b;
    }

     if(isset($_POST['l1']) and isset($_POST['l2']) and isset($_POST['sel'] )){
        $l1 = $_POST['l1'];
        $l2 = $_POST['l2'];
        $sel = $_POST['sel'];
        switch($sel){
            case 1:
                echo "Wynik z dodawania wynosi: <br>";
                echo suma($l1, $l2);
            break;
            case 2:
                echo "Wynik z odejmowania wynosi: <br>";
                echo roznica($l1, $l2);
            break;
            case 3:
                echo "Wynik z mnozenia wynosi: <br>";
                echo mnozenie($l1, $l2);
            break;
            case 4:
                echo "Wynik z dzielenia wynosi: <br>";
                echo dzielenie($l1, $l2);
            break;
        }
        
        
    }
    
    ?>
</body>
</html>