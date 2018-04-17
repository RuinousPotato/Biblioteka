<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wyszukiwanie książek</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css">
    <script src="search.js"></script>
  </head>
  <body>
  <center><h2>Wyszukiwanie książek</h2></center>
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
          <form name="searchForm" action = "DisplayBooks.php" onsubmit="return validateForm()" method="get">
            <br>
            <center>
              <table border="0" align="center" cellpadding="5" cellspacing="5">
                <tr>
                  <td>Podaj tytuł książki:</td>
                  <td><input class="form-control" type="text" name="search_title" size="48" placeholder="Tytuł"></td>
                </tr>
                <tr>
                  <td>Podaj autora książki:</td>
                  <td><input class="form-control" type="text" name="search_author" size="48" placeholder="Autor"></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input class="btn btn-success" type="submit" value="Szukaj">
                    <input class="btn btn-warning" type="reset" value="Resetuj">
                  </td>
                </tr>
              </table>
            </center>
            <br>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
