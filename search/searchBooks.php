<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wyszukiwanie książek</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <br>
    <center><h2>Podaj tytuł lub autora:</h2></center>
    <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <form name="searchForm" action ="displayBooks.php" onsubmit="return validateForm()" method="post">
              <br>
              <center>
                <table border="0" align="center" cellpadding="5" cellspacing="5">
                  <tr>
                    <td><h5>Podaj tytuł książki:</h5></td>
                    <td><input class="form-control" type="text" name="search_title" size="48" placeholder="Tytuł"></td>
                  </tr>
                  <tr>
                    <td><h5>Podaj autora książki:</h5></td>
                    <td><input class="form-control" type="text" name="search_author" size="48" placeholder="Autor"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <input class="btn btn-success" type="submit" value="Szukaj" name="szukajka">
                      <input class="btn btn-warning" type="reset" value="Resetuj">
                    </td>
                  </tr>
                </table>
                <br>
                <a href="../index.php" class="btn btn-primary btn-md"> Strona główna</a>
              </center>
              <br>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>
