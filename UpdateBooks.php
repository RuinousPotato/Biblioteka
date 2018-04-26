<?php
//print_r(PDO::getAvailableDrivers());
try {
  $pdo = new PDO('mysql:host=localhost;dbname=biblioteka','root','root123');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//print_r($handler);
} catch(PDOException $e) {
  echo $e->getMessage();
  die();
}

class updateBook {
    public $tytul, $autor, $wydawnictwo;
}

$query = $pdo->query('SELECT * FROM ksiazki_arkonska');
$query->setFetchMode(PDO::FETCH_CLASS, 'updateBook');
 //$row = $query->fetch(PDO::FETCH_ASSOC);
 //echo '<pre>',print_r($row), '</pre>';

while($row = $query->fetch(PDO::FETCH_OBJ)){
  //echo $row->Tytul, '<br>';
  echo '<pre>', print_r($row), '</row>';
}


/*
$db_update = $pdo->prepare("INSERT INTO form_input (name, email, phone)
VALUES (:name, :email, :phone)");
$db_update->bindParam(':name', $name);
$db_update->bindParam(':email', $email);
$db_update->bindParam(':phone', $phone);
$db_update->execute();
*/

?>
