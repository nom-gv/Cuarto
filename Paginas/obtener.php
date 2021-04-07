<?php
$resultadoC = mysqli_query($con, "SELECT * FROM color WHERE usuario = '$usuario'");
$resultadoC1 = mysqli_fetch_array($resultadoC);
$resultadoC2 = mysqli_fetch_array($resultadoC);
$resultadoC3 = mysqli_fetch_array($resultadoC);

$resultadoP = mysqli_query($con, "SELECT * FROM usuario u, persona p WHERE  u.usuario = '$usuario' AND u.ci = p.ci");
$resultadoP = mysqli_fetch_array($resultadoP);

$resultadoU = mysqli_query($con, "SELECT * FROM usuario WHERE usuario = '$usuario'");
$resultadoU = mysqli_fetch_array($resultadoU);

$resultadoN = mysqli_query($con, "SELECT * FROM usuario u, persona p, nota n WHERE u.usuario = '$usuario' and u.ci = p.ci and p.ci = n.ci");

$resultadoD = mysqli_query($con, "SELECT * FROM usuario u, docente d WHERE u.usuario = '$usuario' and d.ci = u.ci")

?>