<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wyszukiwanie książek</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles.css">
  <script src="search.js"></script>
</head>
<body bgcolor="87ceeb">
  <center><h2>Biblioteka</h2></center>
  <br>
    <?php
    include("../DBConnection.php");
    $tytul=$_POST["tytul"];
    $autor=$_POST["autor"];
    $data=$_POST["data"];
    $wydawnictwo=$_POST["wydawnictwo"];
    $isbn=$_POST["isbn"];
    $gatunek=$_POST["gatunek"];
    $lokalizacja=$_POST["lokalizacja"];
    $query = "INSERT INTO ksiazki_arkonska
              (Tytul, Autor, Data_wydania, Wydawnictwo, ISBN, Gatunek, Lokalizacja)
              VALUES
              ('$tytul', '$autor', '$data', '$wydawnictwo', '$isbn', '$gatunek', '$lokalizacja')";
    mysqli_query(OpenCon(),$query);
    ?>
  <center>
    <h3> Książka została dodana do bazy danych </h3>
    <br>
    <a href="EnterBook.php" class="btn btn-primary btn-lg"> Powrót do wpisywania książek </a>
    <a href="SearchBooks.php" class="btn btn-primary btn-lg"> Szukaj lub usuwaj książki </a>
  </center>
</body>
</html>
