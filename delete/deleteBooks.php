<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Biblioteka</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles.css">
</head>
<body>

  <?php

  //print_r($_REQUEST);
  $id = $_POST['id'];

  include("../DBConnection.php");
  try{
  $deleteQuery = "DELETE FROM ksiazki_arkonska
                  WHERE ID IN $id";
  //print_r($deleteQuery);

  mysqli_query(OpenCon(),$deleteQuery);

    echo "<center><h1>Usunięto wybrane książki.</h1></center>";
  } catch (\Throwable $e) {
      echo $e->getMessage();
  }


  ?>
  <br>
  <center>
    <a href="../create/enterBook.php" class="btn btn-primary btn-lg"> Powrót do wpisywania książek </a>
    <a href="../search/searchBooks.php" class="btn btn-primary btn-lg"> Szukaj lub usuwaj książki </a>
  </center>
</body>
