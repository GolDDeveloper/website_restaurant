<?php
include 'dbcon.php';
//deletes field in database
$id = $_POST['ID'];
$sql="DELETE FROM bestellungen WHERE bestellungen.id ='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>