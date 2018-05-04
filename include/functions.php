<?php

function insertBook(){
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
}
?>
