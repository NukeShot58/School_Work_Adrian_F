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
    function mnoz($a, $b){
        return ($a*$b);
    }

     if(isset($_POST['l1']) and $_POST['l2']){
        $l1 = $_POST['l1'];
        $l2 = $_POST['l2'];

        echo "Wynik mnozenia liczb:<br>";
        echo mnoz($l1,$l2);
    }
    ?>
</body>
</html>