<?php

function OpenCon()
 {
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "root123";
   $db = "biblioteka";

   $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
   return $conn;
 }
function CloseCon($conn)
 {
   $conn -> close();
 }

function insertBook(){
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
}

function deleteBooks($id){

  try{
  $deleteQuery = "DELETE FROM ksiazki_arkonska
                  WHERE ID IN $id";
  //print_r($deleteQuery);

  mysqli_query(OpenCon(),$deleteQuery);

    echo "<center><h1>Usunięto wybrane książki.</h1></center>";
  } catch (\Throwable $e) {
      echo $e->getMessage();
  }

}
?>
