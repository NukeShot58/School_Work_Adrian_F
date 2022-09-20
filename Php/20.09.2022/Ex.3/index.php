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
        <input type="number" name="l3" placeholder="Podaj trzecią liczbę">
        <button type="submit">Oblicz</button>
    </form>
    <?php 
    function liczby_pitagorejskie($a, $b, $c){
        if($a*$a+$b*$b==$c*$c and $a > 0 and $b>0 and $c > 0){
            return 1;
        }else{
        return 0;
        }
    }

     if(isset($_POST['l1']) and $_POST['l2']){
        $l1 = $_POST['l1'];
        $l2 = $_POST['l2'];
        $l3 = $_POST['l3'];

        if(liczby_pitagorejskie($l1, $l2, $l3)){
            echo 'Liczby spełniają warunek';
        }else{
            echo 'Liczby nie spełniają warunku';
        }

        
    }
    ?>
</body>
</html>