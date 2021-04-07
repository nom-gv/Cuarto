<?php
include "conexion.inc.php";
$usuario=$_GET['usuario'];
include "obtener.php";
include "../Templates/cabeceraUser.inc.php";
include "../Templates/navegadorUser.inc.php";
include "../Templates/cuerpoUser.inc.php";
include "../Templates/pieUser.inc.php";
?>