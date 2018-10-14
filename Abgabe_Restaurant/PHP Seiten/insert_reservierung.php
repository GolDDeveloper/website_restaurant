<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_food_palace";

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
}


$personen = mysqli_real_escape_string($conn, $_POST['personen']);
$zeit = mysqli_real_escape_string($conn, $_POST['zeit']);
$bemerkung = mysqli_real_escape_string($conn, $_POST['bemerkung']);

$sql = "INSERT INTO reservierung (personen, zeit, bemerkung)
VALUES ('$personen', '$zeit', '$bemerkung') ";

if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
