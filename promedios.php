<?php
include "conexion.inc.php";

$promedios= mysqli_query($con, "select DISTINCT sigla from nota order by sigla");
$promedios2= mysqli_query($con, "select x1.departamento,x1.sigla, AVG(notafinal)promedio 
from
(select departamento,sigla,notafinal from persona x1 join nota x2 on x1.ci=x2.ci) x1
group by x1.departamento,x1.sigla order by x1.sigla");
?>
<h2>Promedios por Departamento</h2>
<table>
<tr>
	<td></td>
	<td>TA</td>
	<td>LP</td>
    <td>CB</td>
	<td>CH</td>
	<td>OR</td>
	<td>PO</td>
	<td>SC</td>
	<td>PA</td>
	<td>BE</td>
	
	
</tr>

<tr>
<?php
while($fila2 = mysqli_fetch_array($promedios))
{
		echo "<tr>";
	 echo "<td>$fila2[sigla]</td>";
		while ($fila = mysqli_fetch_array($promedios2))
		{

		echo "<td>$fila[promedio]</td>";

		}
	 echo "</tr>";
}	
?>
<?php
		
	

?>
</tr>
</table>