<!DOCTYPE html>
<html lang="en">

<head>

  <title>Restaurant Food Palace Kontakt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/style.css" media="screen">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="./Home.php">HOME</a></li>
          <li><a href="./Kontakt.php">Kontakt</a></li>
          <li><a href="./Menü.php">Menü</a></li>
          <li><a href="./PersonalLogin.php">Personal</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="containerWObot text-center">
    <h1>Kontakt</h1>
    <p>Sie möchten einen Tisch bestellen oder aus einem anderen Grund Kontakt mit uns aufnehmen?
      Rufen Sie uns an oder schreiben Sie uns eine E-Mail! Alternativ können Sie auch direkt im Browser einem
      Anfrage zum Bestellen eines Tisches abschicken. Wir werden Sie dann per E-Mail benachrichtigen,
      ob wir Ihnen einen Tisch reservieren konnten oder nicht!
      <br>Wir werden Ihre Anfrage schnellstmöglich bearbeiten. Sollten wir sie nicht umgehend
      beantworten können, so bitten wir Sie um Verständnis.
    </p>
  </div>

  <div class="smallcontainer text-center">
  <script>
    function getData() {
      $personen = document.getElementById('personen').value;
      $zeit = document.getElementById('zeit').value;
      $bemerkung = document.getElementById('bemerkung').value;

      insertData($personen, $zeit, $bemerkung);
    }

    function insertData($personen, $zeit, $bemerkung) {
      alert("Hallo");
       $.post("insert_reservierung.php", {
          personen: $personen,
          zeit: $zeit,
          bemerkung: $bemerkung
      });
    }
  </script>
  <form>
    <ul>
    <label for="personen">Personen</label>
    <input type="number" id="personen">
    <br>
    <label for="datum">Datum</label>
    <input type="datetime-local" id="zeit">
    <br>
    <label for="bemerkungen">Zusätzliche Bemerkungen</label>
    <input type="text" id="bemerkung">
    <br>
    </ul>
    <input type="submit" onclick="getData()">
    </form>
  </div>

  <div class="smallcontainer text-center">
    <div>
      <h3>Impressum</h3>
      <ul>
        <li>Telefon: 12345-67890</li>
        <li>E-Mail: food-palace@kontakt.de</li>
        <li>Adresse: Musterstraße 5, 78342 Musterstadt</li>
      </ul>
    </div>
  </div>

</body>

</html>
