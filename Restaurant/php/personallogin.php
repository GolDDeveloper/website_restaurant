<!DOCTYPE html>
<html lang="en">

<head>

  <title>Restaurant Food Palace Personal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">

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
        <li><a href="./home.php">HOME</a></li>
          <li><a href="./kontakt.php">Kontakt</a></li>
          <li><a href="./menue.php">Menü</a></li>
          <li><a href="./personallogin.php">Personal</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container text-center">
    <h1>Personal</h1>

    <h3>Diese Seite ist passwortgeschützt. Bitte geben Sie das Passwort ein.</h3>
    <input type="password" id="passwort" onkeyup="keyupHdl(event)">
    <button id="login" onClick="checkPW()">Bestätigen</button>

    <script>
      function keyupHdl(e) {
        if (e.keyCode === 13) {
          checkPW();
        }
      }

      function checkPW() {
        var $pw = document.getElementById("passwort").value;

        if ($pw != "Passwort") {
          alert("Falsches Passwort");
        }
        else {
          window.location.href = "./personalbereich.php";
        }
      }

    </script>
  </div>


</body>

</html>