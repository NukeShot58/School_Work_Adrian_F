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
        <input type="text" name="t1" >
        <button type="submit">Oblicz</button>
    </form>

    <?php 
    if(isset($_POST['t1'])){
        $t1 = $_POST['t1'];
        echo strlen($t1);
    }
      ?>
</body>
</html>