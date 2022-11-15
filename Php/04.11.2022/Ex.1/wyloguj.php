<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit();
}
unset($_SESSION['user']);
unset($_SESSION['error']);

session_destroy();

header('Location: index.php')
?>