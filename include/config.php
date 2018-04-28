<?php

function getConnection(){
    $con=new PDO("mysql:host=localhost;dbname=biblioteka", "root", "root123");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}

function selectBooks($query){
    $pdo= getConnection();

    $stmt=$pdo->query($query);
    return $stmt->fetchAll();
}

function updateBooks($query){
    $pdo=getConnection();

    $stmt=$pdo->prepare($query);
    return $stmt->execute();
}

?>
