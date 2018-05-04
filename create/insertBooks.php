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
      include ("../include/functions.php");
      insertBook();
    ?>
  <center>
    <h3> Książka została dodana do bazy danych </h3>
    <br>
    <a href="EnterBook.php" class="btn btn-primary btn-lg"> Powrót do wpisywania książek </a>
    <a href="../search/searchBooks.php" class="btn btn-primary btn-lg"> Szukaj lub usuwaj książki </a>
  </center>
</body>
</html>
