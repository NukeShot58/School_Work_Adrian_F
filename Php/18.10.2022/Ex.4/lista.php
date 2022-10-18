<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <select name="s1" multiple>
        <option value="jajka">jajka</option>
        <option value="mleko">mleko</option>
        <option value="chleb">chleb</option>
        <option value="jabłka">jabłka</option>
        <option value="banaby">banany</option>
        <option value="szynka">szynka</option>
        <option value="kiełbasa">kiełbasa</option>
        <option value="płatki">płatki</option>
        <option value="kukurydza">kukurydza</option>
    </select><br>
    <input type="submit" value="Dodaj do koszyka">
    </form>
    <?php 
    if(isset($_POST['s1'])){
        $_SESSION['list'] = $_POST['s1'];
    }
    ?>
</body>
</html>