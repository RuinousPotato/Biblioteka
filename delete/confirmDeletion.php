<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Biblioteka</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles.css">
</head>
<body>
  <br>
  <center><h2>Zamierzasz usunąć następujące książki:</h2></center>
  <?php
  include("../DBConnection.php");
  $list = array_keys($_REQUEST);
  //print_r($list);
  $id_list = "(".implode(", ", $list).")";
  //print_r($id_list);

  $query = "SELECT * FROM `ksiazki_arkonska` WHERE ID IN $id_list";

  if($_GET){

      $result = mysqli_query(OpenCon(),$query);

      if(mysqli_num_rows($result)>0){
        ?>
          <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
              <th> Tytuł </th>
              <th> Autor </th>
              <th> Data wydania </th>
              <th> Wydawnictwo </th>
              <th> ISBN </th>
              <th> Gatunek </th>
              <th> Lokalizacja </th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)){
              ?>
            <tr>
              <td><?php echo $row["Tytul"];?> </td>
              <td><?php echo $row["Autor"];?> </td>
              <td><?php echo $row["Data_wydania"];?> </td>
              <td><?php echo $row["Wydawnictwo"];?> </td>
              <td><?php echo $row["ISBN"];?> </td>
              <td><?php echo $row["Gatunek"];?> </td>
              <td><?php echo $row["Lokalizacja"];?> </td>
            </tr>
          <?php
        } ?>
          </table>
          <br>
          <center>
            <form name="id" action="DeleteBooks.php" method="post">
              <input type="hidden" name="id" value="<?php echo "$id_list" ?>">
              <input class="btn btn-danger" type="submit" value="Potwierdź usunięcie">
            </form>
            <br>
              <a href="../create/enterBook.php" class="btn btn-primary btn-md"> Powrót do wpisywania książek </a>
              <a href="../search/searchBooks.php" class="btn btn-primary btn-md"> Szukaj kolejnej książki </a>
          </center>
        <?php
      } else {
      echo "<center>No books found in the library.</center>";
      }
    } else {
      echo "<center><h4>Musisz zaznaczyć przynajmniej jedną książkę!</h4></center>";
    }
  ?>

  </body>
</html>
<br>
