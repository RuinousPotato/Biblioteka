<?php
//print_r($_REQUEST);
$id=$_REQUEST['id'];
echo $id;


try {
    $pdo = new PDO("mysql:host=localhost;dbname=biblioteka","root","root123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}


 ?>
