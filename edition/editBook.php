<?php

//include './include/config.php';
print_r($_REQUEST);
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    echo $id;
}

try {
$pdo=new PDO("mysql:host=localhost;dbname=biblioteka", "root", "root123");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$selectBook="SELECT * FROM ksiazki_arkonska WHERE id = :id";

$statement = $pdo->prepare($selectBook);
$statement->bindValue(':id', $id);
$statement->execute();
$book = $statement->fetchAll();

//$book=selectBooks($selectBook);
} catch (\Throwable $e) {
echo $e->getMessage();
}

?>

<form action="UpdateBooks.php" method="post">
    <input type="hidden" name="id" value = "<?php echo $book[0]['ID']; ?>">
    <input type="text" name="Tytul" value="<?php echo $book[0]['Tytul']; ?>"> <br>
    <input type="text" name="Autor" value="<?php echo $book[0]['Autor']; ?>"> <br>
    <input type="text" name="Data_Wydania" value="<?php echo $book[0]['Data_wydania']; ?>"> <br>
    <input type="text" name="Wydawnictwo" value="<?php echo $book[0]['Wydawnictwo']; ?>"> <br>
    <input type="text" name="ISBN" value="<?php echo $book[0]['ISBN']; ?>"> <br>
    <input type="text" name="Gatunek" value="<?php echo $book[0]['Gatunek']; ?>"> <br>
    <input type="text" name="Lokalizacja" value="<?php echo $book[0]['Lokalizacja']; ?>"> <br>
    <input type="submit" name="submit" value="Zapisz">
</form>
