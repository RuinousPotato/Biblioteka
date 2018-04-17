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
  <center><h2>Biblioteka</h2></center>
  <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form action="InsertBooks.php" method="post">
                <table border="0" align="center" cellpadding="5" cellspacing="5">
                    <tr>
                      <td> Podaj tytuł:</td>
                      <td> <input class="form-control" type="text" name="tytul" placeholder="Tytuł" size="84"> </td>
                    </tr>
                    <tr>
                      <td> Podaj autora:</td>
                      <td> <input class="form-control" type="text" name="autor" placeholder="Autor"> </td>
                    </tr>
                    <tr>
                      <td> Podaj datę wydania:</td>
                      <td> <input class="form-control" type="text" name="data" placeholder="Rok wydania"> </td>
                    </tr>
                    <tr>
                      <td> Podaj wydawnictwo:</td>
                      <td> <input class="form-control" type="text" name="wydawnictwo" placeholder="Wydawnictwo"> </td>
                    </tr>
                    <tr>
                      <td> Podaj nr ISBN: </td>
                      <td> <input class="form-control" type="text" name="isbn" placeholder="ISBN"> </td>
                    </tr>
                    <tr>
                      <td> Podaj gatunek: </td>
                      <td> <input class="form-control" type="text" name="gatunek" placeholder="Gatunek"> </td>
                    </tr>
                    <tr>
                      <td> Podaj lokalizację: </td>
                      <td> <input class="form-control" type="text" name="lokalizacja" placeholder="Lokalizacja"> </td>
                    </tr>
                    <tr>
                      <td></td>
                    <td>
                      <input class="btn btn-success"  type="submit" value="Dodaj">
                      <input class="btn btn-warning"  type="reset" value="Resetuj">
                    </td>
                    </tr>
                  </table>
                </br>
            </form>
            <center><a href="http://localhost/biblioteka/searchbooks.php" class="btn btn-primary">Szukaj lub usuń książki</a></center>
        </div>
    </div>
  </div>
</body>
</html>

<!--
<form action="InsertBooks.php" method="post">
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <td> Podaj tytuł:</td>
            <td> <input class="form-control" type="text" name="tytul" placeholder="Tytuł" size="84"> </td>
        </tr>
        <tr>
            <td> Podaj autora:</td>
            <td> <input class="form-control" type="text" name="autor" placeholder="Autor"> </td>
        </tr>
        <tr>
            <td> Podaj datę wydania:</td>
            <td> <input class="form-control" type="text" name="data" placeholder="Rok wydania"> </td>
        </tr>
        <tr>
            <td> Podaj wydawnictwo:</td>
            <td> <input class="form-control" type="text" name="wydawnictwo" placeholder="Wydawnictwo"> </td>
        </tr>
        <tr>
            <td> Podaj nr ISBN: </td>
            <td> <input class="form-control" type="text" name="isbn" placeholder="ISBN"> </td>
        </tr>
        <tr>
            <td> Podaj gatunek: </td>
            <td> <input class="form-control" type="text" name="gatunek" placeholder="Gatunek"> </td>
        </tr>
        <tr>
            <td> Podaj lokalizację: </td>
            <td> <input class="form-control" type="text" name="lokalizacja" placeholder="Lokalizacja"> </td>
        </tr>
        <tr>
            <td></td>
        <td>
            <input class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-primary" type="reset" value="Reset">
        </td>
        </tr>
    </table>
</form>
-->
