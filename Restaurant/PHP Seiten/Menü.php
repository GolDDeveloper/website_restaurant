<!DOCTYPE html>
<html lang="en">

<head>

  <title>Restaurant Food Palace Menü</title>
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

  <div class = "container text-center">
  <h1>Menü</h1>
  <p>Willkommen auf unserer Menüseite. Hier sehen Sie sämtliche Speisen, die wir Ihnen anbieten.
  Zudem können Sie hier ihr Essen bestellen.  Ihre aktuelle Auswahl wird Ihnen immer am Ende
  der Seite angezeigt.</p>


	<?php
  header("Content-Type:text/html;charset=utf-8");
     $servername = "localhost";
    $dbname   = "website_food_palace";
    $username = "root";
    $password = "";
     // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
     // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }
    //setzt charset auf utf8
    mysqli_set_charset($conn, "utf8");
    // Create query:
    //Vorspeise
    $sql = "SELECT * FROM speisentabelle WHERE ID BETWEEN 1 AND 4;";
    //Hauptspeisen
    $sql2 = "SELECT * FROM speisentabelle WHERE ID BETWEEN 5 AND 20;";
    //Dessert
    $sql3 = "SELECT * FROM speisentabelle WHERE ID BETWEEN 21 AND 25;";
    //Getränke
    $sql4 = "SELECT * FROM speisentabelle WHERE ID BETWEEN 26 AND 34;";
     //print Vorspeise
    $result = mysqli_query($conn, $sql);
    echo "<h2>Vorspeise</h2>";
    echo '<table border="1">';
    while ($zeile = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>". $zeile['ID'] . "</td>";
      echo "<td>". $zeile['speise'] . "</td>";
      echo "<td>". $zeile['preis']. " €</td>";
      echo "<td><button id='plus-".$zeile['ID']."' class='orderbutton'>+</button>   <button id='minus-".$zeile['ID']."' class='orderbutton'>-</button></td>";
      
      echo "</tr>";
     }
    echo '</table>';
    echo"<br/>";
    //print Hauspeise
    $result2 = mysqli_query($conn, $sql2);
    echo "<h2>Hauptspeisen</h2>";
    echo '<table border="1">';

    while ($zeile = mysqli_fetch_assoc($result2))
    {
      echo "<tr>";
      echo "<td>". $zeile['ID'] . "</td>";
      echo "<td>". $zeile['speise'] . "</td>";
      echo "<td>". $zeile['preis']. " €</td>";
      echo "<td><button id='plus-".$zeile['ID']."' class='orderbutton'>+</button>   <button id='minus-".$zeile['ID']."' class='orderbutton'>-</button></td>";
      echo "</tr>";
     }
    echo '</table>';
    echo"<br/>";
     //print Dessert
    $result3 = mysqli_query($conn, $sql3);
    echo "<h2>Dessert</h2>";
    echo '<table border="1">';
    while ($zeile = mysqli_fetch_assoc($result3))
      {
      echo "<tr>";
      echo "<td>". $zeile['ID'] . "</td>";
      echo "<td>". $zeile['speise'] . "</td>";
      echo "<td>". $zeile['preis']. " €</td>";
      echo "<td><button id='plus-".$zeile['ID']."' class='orderbutton'>+</button>   <button id='minus-".$zeile['ID']."' class='orderbutton'>-</button></td>";
      echo "</tr>";
       }
      echo '</table>';
      echo"<br/>";
     //print Getränke
    $result4 = mysqli_query($conn, $sql4);
    echo "<h2>Getränke</h2>";
    echo '<table border="1">';
    while ($zeile = mysqli_fetch_assoc($result4))
      {
      echo "<tr>";
      echo "<td>". $zeile['ID'] . "</td>";
      echo "<td>". $zeile['speise'] . "</td>";
      echo "<td>". $zeile['preis']. " €</td>";
      echo "<td><button id='plus-".$zeile['ID']."' class='orderbutton'>+</button>   <button id='minus-".$zeile['ID']."' class='orderbutton'>-</button></td>";
      echo "</tr>";
       }
      echo '</table>';
      echo"<br/>";
 mysqli_close($conn);
 ?>

<div class="containerWObottop" id="status">Sie haben noch nichts bestellt!</div>
<div class="containerWObottop" id="bestellung"></div>
<div class="containerWObottop" id="preis">Aktueller Preis: 0,00€</div>
<br>
<button class="bestellButton" onClick="bestellen()">Bestellen</button>
</div>

<script>
$bestellung = new Array(
  0, 0, 0, 0, 0, // 5
  0, 0, 0, 0, 0, // 10
  0, 0, 0, 0, 0, // 15
  0, 0, 0, 0, 0, // 20
  0, 0, 0, 0, 0, // 25
  0, 0, 0, 0, 0, // 30
  0, 0, 0, 0 //34
  );

$preise = new Array(
  4.50, 4.50, 4.50, 4.00, 5.50, // 5
  6.00, 6.50, 5.00, 6.50, 8.50, // 10
  8.50, 9.00, 8.50, 9.00, 8.50, // 15
  9.50, 9.00, 8.50, 9.00, 7.50, // 20
  4.00, 4.50, 5.00, 1.50, 3.50, // 25
  3.00, 3.00, 3.75, 3.85, 3.20, // 30
  3.20, 2.50, 4.20, 3.20 // 34
);

  $('button.orderbutton').click(function() {
    var $attr = $(this).attr('id');
    var $ar = $attr.split("-");
    var $type = $ar[0];
    var $id = $ar[1];

  if ($type === "plus") {
    add($id);
  }
  else {
    sub($id);
  }

  var el = document.getElementById("bestellung");
  $bes = new Array();
  for (var $i = 0; $i < 34; $i++) {
    if ($bestellung[$i] != 0) {
      var $a = $bestellung[$i] + "x mal Speise " + ($i+1) +"<br>";
      $bes.push($a); 
    }
  }
  $final = $bes.toString();
  while ($final.indexOf(",") !== -1) {
    $final = $final.replace(",", "");
  }
  
  el.innerHTML = $final;
  checkStatus();
  checkPreis();
  });

  function add($id) {
    var $tmp = $bestellung[$id-1];
    $bestellung[$id-1] = $tmp + 1;
  }

  function sub($id) {
    if ($bestellung[$id-1] > 0) {
      var $tmp = $bestellung[$id-1];
      $bestellung[$id-1] = $tmp - 1;
    }
  }

  function checkStatus() {
    var $bool = false;
    var $sta = document.getElementById("status");

    for (var $i = 0; $i < 34; $i++) {
      if ($bestellung[$i] !== 0) {
        $bool = true;
        break;
      }
    }

    if ($bool === true) {
      $sta.innerText = "Ihre aktuelle Bestellung:";
    }
    else {
      $sta.innerText = "Sie haben noch nichts bestellt!";
    }
  }

function checkPreis() {
  var $pr = 0;
  for (var $i = 0; $i < 34; $i++) {
    if ($bestellung[$i] !== 0) {
      $pr = $pr + ($bestellung[$i] * $preise[$i]);
    }
  }

  document.getElementById("preis").innerText = "Aktueller Preis: " + $pr + "€";
}

function resetSeite() {
  // Reset $bestellung
  for (var $i = 0; $i < 34; $i++) {
    if ($bestellung[$i] !== 0) {
      $bestellung[$i] = 0;
    }
  }

  // Reset Divs
  document.getElementById("bestellung").innerText ="";
  checkPreis();
  checkStatus();
}

function bestellen() {
  resetSeite();
  alert("Ihre Bestellung wurde erfolgreich aufgegeben!");
}


  // Insert Bestellung in Datenbank mit AJAX
  $('button.bestellButton').click(function() {
  
  $.ajax({
    type: "POST",
    url: "",
    data: ""
  }).done(function() {
    alert("Ihre Bestellung wurde erfolgreich aufgegeben.");
  });
  });
  </script>

</body>
</html>
