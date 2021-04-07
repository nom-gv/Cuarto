<?php
include "conexion.inc.php";
?>	
	<div id="cuerpoForm" class="cuerpo">
		<div>
			<h2>Carrera de<br>Informática</h2>
			<form class="formu" id="infoForm" method="POST">
				<label for="usuario">Usuario</label>
				<input type="text" name="usuario">
				<label for="contraseña">Contraseña</label>
				<input type="password" name="contraseña">
				<div>
					<input type="submit" name="" value="Ingresar">
				</div>
			</form>
		</div>
		<a href="index.php">volver</a>
	</div>