<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wpisywanie książek</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="surprise.js"></script>
</head>
<body>
  <center><h2>Biblioteka</h2></center>
  <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img src="books02.jpg" class="img-fluid hoverable" alt="Responsive image" height="auto" onclick="showElem(&quot;elefant&quot;)">
      </div>
      <div class="col-sm-6">
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
          <br>
      </div>
      <div class="col-sm-3">
        <img src="books01.jpg" class="img-fluid" alt="Responsive image" height="auto" onclick="showElem(&quot;elephant&quot;)">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5 surprise" id="elefant">
        <p class="text-right">Heer aus Sand und Licht gedeiht<br>
        Bildnis stummer Einsamkeit<br>
        Und ihr Blick der alles hält<br>
        Folgt dir bis in dein Zelt<br></p>

        <p class="text-right">Dumpfes Licht verhüllt den Raum<br>
        Feuer färbt das Blod zu Braun<br>
        Rüssel tönen ein zum Klang<br>
        Den der Mann im Mondfeld sang<br></p>

        <p class="text-right">Hold bist du ein Leben lang<br>
        Keturah dem Abraham<br></p>

        <p class="text-right">Und dein König lässt dich leiten<br>
        Du weiß schon wohin<br>
        Wenn 2000 Elefanten<br>
        Durch deinen Blutkreis zeih‘n<br></p>

        <p class="text-right">Gellend in die Nacht hinein<br>
        Schlägt ein Herz aus Elfenbein<br>
        Es verrät dem Heer aus Sand<br>
        Was der Mann im Mondfeld fand<br></p>

        <p class="text-right">Hold bist du ein Leben lang<br>
        Keturah dem Abraham<br>
        Hold bist du dein Leben lang<br>
        Keturah dem Abraham<br></p>

        <p class="text-right">Und dein König lässt dich leiten<br>
        Du weiß schon wohin<br>
        Wenn 2000 Elefanten<br>
        Durch deinen Blutkreis zeih‘n<br></p>

        <p class="text-right">Und dein König lässt dich leiten<br>
        Denn du bist Königin<br>
        Wenn 2000 Elefanten<br>
        Durch deinen Blutkreis zieh‘n</p>
      </div>
      <div class="col-sm-2"></div>
      <div class="col-sm-5 surprise" id="elephant">
        <p>An army of sand surrounds you<br>
        A lonely, mute wilderness<br>
        Its all seeing gaze surveys your moves,<br>
        Follows you to your tent</p>

        <p>A hollow light that fills the room<br>
        Turns fire from blond to brown<br>
        Swaying trunks tune into the song<br>
        As the man in the poppy field sings:</p>

        <p>“How loyal you are, your whole life,<br>
        like Kethura was to Abraham”</p>

        <p>And your King will let you lead him<br>
        To where you already know<br>
        When 2000 elephants<br>
        Are marching through your veins</p>

        <p>Shrill into the night<br>
        beats an Ivory Heart<br>
        It reveals to the army of sand<br>
        What the man in the poppy field knew.</p>

        <p>“How loyal you are, your whole life,<br>
        like Kethura was to Abraham<br>
        How loyal you are, your whole life,<br>
        like Kethura was to Abraham”</p>

        <p>And your King will let you lead him<br>
        To where you already know<br>
        When 2000 elephants<br>
        Are marching through your veins</p>
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
