<?php
include 'dbcon.php';

$id = mysqli_real_escape_string($conn, $_POST['speise']);
$anz = mysqli_real_escape_string($conn, $_POST['anzahl']);
$tischID = mysqli_real_escape_string($conn, $_POST['tischID']);

$sql = "INSERT INTO bestellungen (speise,anzahl, tisch)
VALUES ('$id', '$anz', '$tischID') ";

if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>