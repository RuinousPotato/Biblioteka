<?php

// include './include/config.php';
// print_r($_REQUEST);
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
  //  echo $id;
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
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Edycja książki</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
  <center>
    <br>
    <h1>Zaktualizuj dane książki</h1>
    <br>
    <form action="UpdateBooks.php" method="post">
      <input type="hidden" name="id" value = "<?php echo $book[0]['ID']; ?>">
      <table>
        <tr>
          <td>Tytuł</td>
          <td>
            <input type="text" name="Tytul" value="<?php echo $book[0]['Tytul']; ?>"> <br>
          </td>
        </tr>
          <td>Autor</td>
          <td>
            <input type="text" name="Autor" value="<?php echo $book[0]['Autor']; ?>"> <br>
          </td>
        </tr>
          <td>Data wydania</td>
          <td>
            <input type="text" name="Data_Wydania" value="<?php echo $book[0]['Data_wydania']; ?>"> <br>
          </td>
        </tr>
          <td>Wydawnictwo</td>
          <td>
            <input type="text" name="Wydawnictwo" value="<?php echo $book[0]['Wydawnictwo']; ?>"> <br>
          </td>
        </tr>
          <td>ISBN</td>
          <td>
            <input type="text" name="ISBN" value="<?php echo $book[0]['ISBN']; ?>"> <br>
          </td>
        </tr>
          <td>Gatunek</td>
          <td>
            <input type="text" name="Gatunek" value="<?php echo $book[0]['Gatunek']; ?>"> <br>
          </td>
        </tr>
          <td>Lokalizacja</td>
          <td>
            <input type="text" name="Lokalizacja" value="<?php echo $book[0]['Lokalizacja']; ?>"> <br>
          </td>
        </tr>
      </table>
      <br>
      <input type="submit" class="btn btn-warning btn-md" name="submit" value="Zapisz">
    </form>
    <br>
    <a href="../create/enterBook.php" class="btn btn-warning btn-sm"> Wpisz nową książkę </a>
    <a href="../search/searchBooks.php" class="btn btn-warning btn-sm"> Szukaj kolejnej książki </a>
  </center>
</body>
