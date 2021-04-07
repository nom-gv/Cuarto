	<div id="navegador">
		<div>
			<?php
			$resultadoCargo = mysqli_query($con,"SELECT * FROM usuario WHERE usuario = '$usuario' and id_cargo = 2");
			$filas=mysqli_num_rows($resultadoCargo);
			if($filas) {
				echo "<a href='../Paginas/UserMateriasInf.php?usuario=$usuario'>Materias</a>";
			}else {
				echo "<a href='../Paginas/UserMateriasInfD.php?usuario=$usuario'>Materias</a>";
			}
			echo "<a href='../Paginas/UserConfigInf.php?usuario=$usuario'>Configuraciones</a>";
			?>
			<a href="#">Información</a>
			<a href="../Paginas/index.php">Salir</a>
		</div>
	</div>