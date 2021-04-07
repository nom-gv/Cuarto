	<div id="configuracion">
		<h2>Configuraciones</h2>
		<div id="modificar">
			<h3>MODIFICAR DATOS DE USUARIO</h3>
			<div>
				<div id="imagen">
					<div></div>
					</div>
				<div id="form">
					<form id="formuConf">
						<?php
						echo "<label for='nombre'>Nombre</label>";
						echo "<input type='text' name='nombre' value='$resultadoP[nombre_completo]'>";
						echo "<label for='ci'>CI</label>";
						echo "<input type='text' name='ci' value='$resultadoP[ci]'>";
						echo "<label for='fecha'>Fecha de Nacimiento</label>";
						echo "<input type='text' name='fecha' value='$resultadoP[fecha_nacimiento]'>";
						echo "<label for='usuario'>Usuario</label>";
						echo "<input type='text' name='usuario' value='$resultadoU[usuario]'>";
					?>
					</form>
				</div>
			</div>
			<h3>MODIFICAR COLORES DE TEMPLATES</h3>
			<div>
				<form id="formuColor" method="POST">
					<?php
					$c1=$resultadoC1['color'];
					$c2=$resultadoC2['color'];
					$c3=$resultadoC3['color'];
					echo "<label for='cabeza'>Cabecera</label>";
					echo "<input type='color' name='cabeza' value='$c1'>";
					echo "<label for='LetraCabeza'>Letras Cabecera:</label>";
					echo "<input type='color' name='LCabeza' value='$c2'>";
					echo "<label for='pieP'>Pie de pagina:</label>";
					echo "<input type='color' name='pieP' value='$c3'>";
					?>
					<input type="submit" name="" value="Enviar">
				</form>
			</div>
		</div>
	</div>