<?php
include "conexion.inc.php";
$usuario=$_GET['usuario'];
include "obtener.php";
include "../Templates/cabeceraUser.inc.php";
include "../Templates/navegadorUser.inc.php";
include "../Templates/cuerpoUserInf.inc.php";
$color1=$_POST['cabeza'];
$color2=$_POST['LCabeza'];
$color3=$_POST['pieP'];
$co1=$resultadoC1['id_color'];
$co2=$resultadoC2['id_color'];
$co3=$resultadoC3['id_color'];
if($color1 != '' || $color2 != '' || $color3 != ''){
	header("Location: userConfigInf.php?usuario=$usuario");
	mysqli_query($con, "UPDATE color SET color = '$color1' WHERE color.id_color = '$co1'");
	mysqli_query($con, "UPDATE color SET color = '$color2' WHERE color.id_color = '$co2'");
	mysqli_query($con, "UPDATE color SET color = '$color3' WHERE color.id_color = '$co3'");
}
include "../Templates/pieUser.inc.php";
?>