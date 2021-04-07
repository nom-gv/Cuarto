	<div id="materia">
		<h2>Notas Del Estudiante</h2>
		<div>
			<table id="tablaNota">
				<tr>
					<th>Sigla</th>
					<th>Nota 1</th>
					<th>Nota 2</th>
					<th>Nota 3</th>
					<th>Nota Final</th>
				</tr>
				<?php
				while($fila = mysqli_fetch_array($resultadoN)) {
					echo "<tr>";
					echo "<td>$fila[sigla]</td>";
					echo "<td>$fila[nota1]</td>";
					echo "<td>$fila[nota2]</td>";
					echo "<td>$fila[nota3]</td>";
					echo "<td>$fila[nota_final]</td>";
					echo "</tr>";
				}
				?>
			</table>
		</div>
	</div>