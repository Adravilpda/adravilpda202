<?php
include "conexion.inc.php";

session_start();
?>
<?php
while ($fila2 = mysqli_fetch_array($cuenta))
{
echo "<tr>";
echo "<td>$fila2[nota1]</td>";
echo "<td>$fila2[nota2]</td>";
echo "<td>$fila2[nota3]</td>";
echo "<td>$fila2[notafinal]</td>";
echo "<td><a href='cuenta.php'>Regresar</a></td>";
echo "</tr>";
}
?>
