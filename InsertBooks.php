<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wyszukiwanie książek</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="/styles.css">
  <script src="search.js"></script>
</head>
<body bgcolor="87ceeb">
  <center><h2>Biblioteka</h2></center>
  <br>
    <?php
    include("DBConnection.php");
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
  <h3> Book information is inserted successfully </h3>
  <a href="SearchBooks.php"> To search for the Book information click here </a>
</body>
</html>
