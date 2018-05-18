<?php

/**
 *
 */
class Book
{

  var $id;
  var $tytul;
  var $autor;
  var $data;
  var $wydawnictwo;
  var $ISBN;
  var $gatunek;
  var $lokalizacja;



  function __construct(var $id, $tytul,
  $autor, $data, $wydawnictwo, $ISBN,
  $gatunek, $lokalizacja)
  {
    $this->id=$id;
    $this->tytul=$tytul;
    $this->autor=$autor;
    $this->data=$data;
    $this->wydawnictwo=$wydawnictwo;
    $this->ISBN=$ISBN;
    $this->gatunek=$gatunek;
    $this->lokalizacja=$lokalizacja;
  }
}


 ?>
