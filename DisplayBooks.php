<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Biblioteka</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="/styles.css">
</head>
<body>
  <center><h2>Wyszukiwane książki:</h2></center>
  <br>
  <?php
  include("DBConnection.php");
  print_r($_REQUEST);
  print_r($_POST);
  $searchTitle = $_REQUEST["search_title"];
  $searchAuthor = $_REQUEST["search_author"];
  $query = "";
  if($_POST){

    if(!empty($searchTitle)||!empty($searchAuthor)){
          echo "Do Search";

      if ($searchTitle!="" && $searchAuthor==""){
        $query = "SELECT Tytul,Autor,Data_wydania,Wydawnictwo,ISBN,Gatunek,Lokalizacja
        FROM ksiazki_arkonska WHERE Tytul LIKE '%".$searchTitle."%'";
      } elseif ($searchAuthor!="" && $searchTitle==""){
        $query = "SELECT Tytul,Autor,Data_wydania,Wydawnictwo,ISBN,Gatunek,Lokalizacja
        FROM ksiazki_arkonska WHERE Autor LIKE '%".$searchAuthor."%'";
      } elseif ($searchAuthor!="" && $searchTitle!="") {
        $query = "SELECT Tytul,Autor,Data_wydania,Wydawnictwo,ISBN,Gatunek,Lokalizacja
        FROM ksiazki_arkonska WHERE (Tytul LIKE '%".$searchAuthor."%') AND
        (Autor LIKE '%".$searchTitle."%')";
      }

      /*else {
        $query = "SELECT Tytul,Autor,Data_wydania,Wydawnictwo,ISBN,Gatunek,Lokalizacja
        FROM ksiazki_arkonska WHERE ('Tytul' LIKE '%".$searchAuthor."%')";
      }*/


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
        }
      } else {
      echo "<center>No books found in the library by the name $searchTitle </center>";
      }
    } else {
      echo "Musisz podać przyznajmniej jedno kryterium wyszukiwania!";
    }
  }
  ?>
  </table>
  </body>
</html>
<br>

<?php
/*  $query = $_GET['query'];
    // gets value sent over search form

    $min_length = 3;
    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

        $query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;

        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection

        $raw_results = mysql_query("SELECT * FROM articles
            WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());

        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table

        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

                echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }

        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
*/
?>