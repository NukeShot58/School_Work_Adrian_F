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
        <input type="number" name="l1" placeholder="Podaj pierwszą liczbę">
        <input type="number" name="l2" placeholder="Podaj drugą liczbę">
        <button type="submit">Oblicz</button>
    </form>
    <?php 
    function sumaX3($a, $b){
        function XX3($c){
            return $c*$c*$c;
        }
        return XX3($a+$b);
    }

     if(isset($_POST['l1']) and $_POST['l2']){
        $l1 = $_POST['l1'];
        $l2 = $_POST['l2'];

        echo "Suma do potęgi 3:<br>";
        echo sumaX3($l1,$l2);
    }
    ?>
</body>
</html>