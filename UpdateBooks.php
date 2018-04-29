<?php

if (isset($_POST['submit'])) {

    print_r($_REQUEST);
    echo "<br>";
try {
    $pdo=new PDO("mysql:host=localhost;dbname=biblioteka", "root", "root123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];
    $tytul = $_POST['Tytul'];
    $autor = $_POST['Autor'];
    $data = $_POST['Data_Wydania'];
    $wydawnictwo = $_POST['Wydawnictwo'];
    $ISBN = $_POST['ISBN'];
    $gatunek = $_POST['Gatunek'];
    $lokalizacja = $_POST['Lokalizacja'];

    //$query = "UPDATE ksiazki_arkonska SET Tytul='"$name . "',Autor='" . $email . "',Data='" . $pos . "',Wydawnictwo='" . $wydawnictwo . "',ISBN='" . $ISBN . "',Gatunek='" . $gatunek . "',Lokalizacja='" . $lokalizacja . "' WHERE ID=".$id;
    //$query = "UPDATE ksiazki_arkonska SET Tytul='$tytul',Autor='$autor',Data='$data',Wydawnictwo='$wydawnictwo',ISBN='$ISBN',Gatunek='$gatunek',Lokalizacja='$lokalizacja' WHERE ID='$id'";

    $query = $pdo->prepare("UPDATE `ksiazki_arkonska` SET `Tytul` = ':tytul', `Autor` = ':autor', `Data_wydania` = ':data', `Wydawnictwo` = ':wydawnictwo', `ISBN` = ':ISBN', `Gatunek` = ':gatunek', `Lokalizacja` = ':lokalizacja' WHERE `ID` = ':id'");
    print_r($query);
    echo "<br>";
    $query->bindParam(':id', $id);
    $query->bindParam(':tytul', $tytul);
    $query->bindParam(':autor', $autor);
    $query->bindParam(':data', $data);
    $query->bindParam(':wydawnictwo', $wydawnictwo);
    $query->bindParam(':ISBN', $ISBN);
    $query->bindParam(':gatunek', $gatunek);
    $query->bindParam(':lokalizacja', $lokalizacja);
    print_r($query);
    echo "<br>";
    $query->execute();

    echo "<br>";
    echo 'Book updated successfully';
    // $update = updateBooks($query);
    } catch (\Throwable $e) {
      echo $e->getMessage();
    }
/*    if ($query->execute() != 0) {

    }else{
        echo 'error in update query';
    }
*/
}

/*
if(isset($_POST['update']))
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=biblioteka","root","root123");
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }

    // get values form input text and number

    $id = $_POST['id'];
    $tytul = $_POST['tytul'];
    $autor = $_POST['autor'];
    $data = $_POST['data'];
    $wydawnictwo = $_POST['wydawnictwo'];
    $ISBN = $_POST['ISBN'];
    $gatunek = $_POST['gatunek'];
    $lokalizacja = $_POST['lokalizacja'];

    // mysql query to Update data

    $query = "UPDATE `ksiazki_arkonska` SET `Tytul`=:tytul,`Autor`=:autor,`Data`=:data,`Wydawnictwo`=:wydawnictwo,`ISBN`=:ISBN,`Gatunek`=:gatunek,`Lokalizacja`=:lokalizacja WHERE `ID` = :id";

    $result = $pdo->prepare($query);

    $pdoExec = $result->execute(array(":tytul"=>$tytul,":autor"=>$autor,":data"=>$data,":wydawnictwo"=>$wydawnictwo,":ISBN"=>$ISBN,":gatunek"=>$gatunek,":lokalizacja"=>$lokalizacja,":id"=>$id));

    if($pdoExec)
    {
        echo 'Data Updated';
    }else{
        echo 'ERROR Data Not Updated';
    }

}
*/
/*
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
    public $id, $tytul, $autor, $data,
    $wydawnictwo, $isbn, $gatunek, $lokalizacja;

    public function __construct(){

    }
}

$autor = 'Abnett Dan';
$tytul = 'Legion'

$sql = "UPDATE ";
$query = $pdo->prepare($sql);

$query->execute(array(
  ':autor' => $autor,
  ':tytul' => $tytul
));


/*

// if($query->rowCount()) {}
$query = $pdo->query('SELECT * FROM ksiazki_arkonska');
$query->setFetchMode(PDO::FETCH_CLASS, 'updateBook');
$results = $query->fetchAll(PDO::FETCH_ASSOC);

 //$row = $query->fetch(PDO::FETCH_ASSOC);
 //echo '<pre>',print_r($row), '</pre>';
if (count($results)){
  while($row = $query->fetch(PDO::FETCH_OBJ)){
    //echo $row->Tytul, '<br>';
    echo '<pre>', print_r($row), '</row>';
  }
} else {
  'There are no results';
}
*/

/*
$db_update = $pdo->prepare("INSERT INTO form_input (name, email, phone)
VALUES (:name, :email, :phone)");
$db_update->bindParam(':name', $name);
$db_update->bindParam(':email', $email);
$db_update->bindParam(':phone', $phone);
$db_update->execute();
*/

?>
