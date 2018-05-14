<?php

if (isset($_POST['submit'])) {

    // print_r($_REQUEST);
    // echo "<br>";
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

    $query = $pdo->prepare("UPDATE `ksiazki_arkonska` SET `Tytul` = :tytul, `Autor` = :autor, `Data_wydania` = :data, `Wydawnictwo` = :wydawnictwo, `ISBN` = :ISBN, `Gatunek` = :gatunek, `Lokalizacja` = :lokalizacja WHERE `ID` = :id");


    // echo ("<pre>");
    // print_r($query);
    // echo ("</pre>");
    // echo "<br>";


    $query->bindParam(':id', $id);
    $query->bindParam(':tytul', $tytul);
    $query->bindParam(':autor', $autor);
    $query->bindParam(':data', $data);
    $query->bindParam(':wydawnictwo', $wydawnictwo);
    $query->bindParam(':ISBN', $ISBN);
    $query->bindParam(':gatunek', $gatunek);
    $query->bindParam(':lokalizacja', $lokalizacja);

    $query->execute();

    $pdo=null;
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Zaktualizowano informacje o książce</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
  <center>
    <h1>Informacje o książce zostały zaktualizowane.</h1>
    <a href="../create/enterBook.php" class="btn btn-primary btn-md"> Wpisz nową książkę </a>
    <a href="../search/searchBooks.php" class="btn btn-primary btn-md"> Szukaj kolejnej książki </a>
  </center>
</body>
<?php
    } catch (\Throwable $e) {
      echo $e->getMessage();
    }
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

?>
