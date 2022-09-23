<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="l1" placeholder="Podaj ilosc liczb">
        <button type="submit">oblicz</button>
    </form>
    <?php 
    if(isset($_POST['l1'])){
        $l1 = $_POST['l1'];
        $tab = [];
        for($i = 0 ;$i < $l1; $i++){
            array_push($tab, rand(1,100));
        }
        $najL = max($tab);
        echo 'Najwieksza liczba: '. $najL;
        echo "<br>";
        $il = 0;
        for($i = 0; $i < count($tab);$i++){
            if($tab[$i] == $najL){
                $il++;
            }
        }
        echo 'Pojawia się ' . $il . ' razy.';
    }
    ?>
</body>
</html>