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

  <div class="container text-center">
    <h1>Menü</h1>

  </div>

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

    // Create database
    $sql = "SELECT * FROM speisentabelle;";

    $result = mysqli_query($conn, $sql);

echo '<table border="1">';
while ($zeile = mysqli_fetch_assoc($result))
{
  echo "<tr>";
 echo "<td>". $zeile['ID'] . "</td>";
 echo "<td>". $zeile['speise'] . "</td>";
 echo "<td>". $zeile['preis'] . "</td>";
 echo "</tr>";

}
echo '</table>';

mysqli_close($conn);

?>
</body>

</html>
