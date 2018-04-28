<?php

include './include/config.php';
print_r($_REQUEST);
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    echo $id;
}

$selectBook="SELECT * FROM ksiazki_arkonska WHERE id=$id";

$book=selectBooks($selectBook);


if (isset($_POST['submit'])) {

    $tytul = $_POST['tytul'];
    $autor = $_POST['autor'];
    $data = $_POST['data'];
    $wydawnictwo = $_POST['wydawnictwo'];
    $ISBN = $_POST['ISBN'];
    $gatunek = $_POST['gatunek'];
    $lokalizacja = $_POST['lokalizacja'];

    //$query = "UPDATE ksiazki_arkonska SET Tytul='"$name . "',Autor='" . $email . "',Data='" . $pos . "',Wydawnictwo='" . $wydawnictwo . "',ISBN='" . $ISBN . "',Gatunek='" . $gatunek . "',Lokalizacja='" . $lokalizacja . "' WHERE ID=".$id;
    $query = "UPDATE ksiazki_arkonska SET Tytul='$name',Autor='$email',Data='$pos',Wydawnictwo='$wydawnictwo',ISBN='$ISBN',Gatunek='$gatunek',Lokalizacja='$lokalizacja' WHERE ID='$id'";

    $update = updateBooks($query);

    if ($update != 0) {
        echo 'employe updated successfully';
    }else{
        echo 'error in update query';
    }
}
?>

<form method="post">
    <input type="text" name="Tytuł" value="<?php echo $book[0]['Tytul']; ?>"> <br>
    <input type="text" name="Autor" value="<?php echo $book[0]['Autor']; ?>"> <br>
    <input type="text" name="Data Wydania" value="<?php echo $book[0]['Data_wydania']; ?>"> <br>
    <input type="text" name="Wydawnictwo" value="<?php echo $book[0]['Wydawnictwo']; ?>"> <br>
    <input type="text" name="ISBN" value="<?php echo $book[0]['ISBN']; ?>"> <br>
    <input type="text" name="Gatunek" value="<?php echo $book[0]['Gatunek']; ?>"> <br>
    <input type="text" name="Lokalizacja" value="<?php echo $book[0]['Lokalizacja']; ?>"> <br>
    <input type="submit" name="submit" value="Edit">
</form>
