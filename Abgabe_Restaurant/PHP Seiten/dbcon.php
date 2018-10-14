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
  ?>
