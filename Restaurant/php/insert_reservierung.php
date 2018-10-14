<?php
include 'dbcon.php';

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