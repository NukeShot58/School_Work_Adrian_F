<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <input type="text" name="t1" placeholder="Do przeszukania" >
        <input type="text" name="t2" placeholder="Do znalezienia">
        <button type="submit">Oblicz</button>
    </form>

    <?php 
    if(isset($_POST['t1']) and isset($_POST['t2'])){
        $t1 = trim($_POST['t1']);
        $t2 = trim($_POST['t2']);
        $num = 0;
        $offset = 0;
        while( gettype(strpos($t1,$t2,$offset)) == "integer"){
            $num++;
            $offset = strpos($t1,$t2,$offset) + 1;
        }
        
        echo $num;
    }
      ?>
</body>
</html>