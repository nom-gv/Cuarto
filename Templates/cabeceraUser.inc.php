<!DOCTYPE html>
<html>
<head>
	<title>SistemaDeSeguimiento</title>
	<link rel="stylesheet" href="../Estilos/estilosUser.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
	<style type="text/css">
		#cabecera {
			background: <?php echo $resultadoC1['color'] ?>;
			color: <?php echo $resultadoC2['color'] ?>;
		}
		#navegador {
			background: <?php echo $resultadoC1['color']."AA" ?>;
		}
		#navegador a {
			color: <?php echo $resultadoC2['color'] ?>;
			font-weight: bold;
		}
		#pie {
			background: <?php echo $resultadoC3['color'] ?>;
	}
</style>
</head>
<body>
	<div id="cabecera">
		<h1>FACULTAD DE CIENCIAS PURAS Y NATURALES</h1>
		<h2>Informática</h2>
	</div>