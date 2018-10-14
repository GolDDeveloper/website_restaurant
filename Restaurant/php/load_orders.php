<?php
include 'dbcon.php';
//reads order data from db
$sql = "SELECT bestellungen.id,speisentabelle.speise,bestellungen.Anzahl,bestellungen.tisch
    FROM bestellungen,speisentabelle WHERE bestellungen.speise = speisentabelle.ID  ORDER BY tisch ";
$result = mysqli_query($conn, $sql);
echo '<table border="1">';
echo "<tr>
      <th>Bestell-ID</th>
      <th>Bestellung</th>
      <th>Anzahl</th>
      <th>Tisch</th>
    </tr>";
  foreach ($result as $zeile)
  {
    echo "<tr>";
    echo "<td>". $zeile['id'] . "</td>";
    echo "<td>". $zeile['speise'] . "</td>";
    echo "<td>". $zeile['Anzahl']. " </td>";
    echo "<td>". $zeile['tisch']. " </td>";
    echo "<td><button id=".$zeile['id']." class='fertigbutton'>fertig</button></td>";
    echo "</tr>";
}
?>

<script>
//click logik für fertig-button
$('button.fertigbutton').click(function() {
     var $id = $(this).attr('id');
     del($id);
 });
function del($id) {
        $.post("delete_order.php", {
          ID: $id
        });
        alert("Erfolgreich gelöscht!");
      }
</script>