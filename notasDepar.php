<?php
include "conexion.inc.php";

$promedios= mysqli_query($con, "select x1.departamento,x1.sigla, AVG(notafinal)promedio 
from
(select departamento,sigla,notafinal from persona x1 join nota x2 on x1.ci=x2.ci) x1
group by x1.departamento,x1.sigla");
?>
<h2>Promedios por Departamento</h2>
<table>
<tr>
	<td>Materia</td>
	<td>Departamento</td>
    <td>Promedio</td>
	
</tr>
<?php

while ($fila = mysqli_fetch_array($promedios))
		{
echo "<tr>";
echo "<td>$fila[departamento]</td>";
echo "<td>$fila[sigla]</td>";
echo "<td>$fila[promedio]</td>";
echo "</tr>";
		}
	}
}
?>
</table>