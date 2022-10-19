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
$dirp = "./f1";
if($deskr = opendir($dirp)){
    $tab = [];
    while(($file = readdir($deskr)) !== false){
    if(is_dir("$dirp/$file") && $file != '.' && $file != '..'){
    array_unshift($tab,$file."<br>");
    }else if(is_file("$dirp/$file")){
        array_push($tab,$file."<br>");
    }
    }
    closedir($deskr);
    echo implode($tab);
}else{
    echo 'katalog -1';
}

?>
</body>
</html>