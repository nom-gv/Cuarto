	<div id="materia">
		<h2>Porcentaje de Materias</h2>
		<table id="tablaNotaD">
			<tr>
				<th></th>
				<th>CH</th>
				<th>LP</th>
				<th>CB</th>
				<th>OR</th>
				<th>PT</th>
				<th>TJ</th>
				<th>SC</th>
				<th>BN</th>
				<th>PN</th>
			</tr>
		<?php
			while($fila = mysqli_fetch_array($resultadoD)) {
					$resultadoNotas = mysqli_query($con, "SELECT * FROM nota n WHERE n.sigla = '$fila[sigla]'");
					echo "<tr>";
					echo "<td>$fila[sigla]</td>";
					$dep = array(
					    "01" => 0,
					    "02" => 0,
					    "03" => 0,
					    "04" => 0,
					    "05" => 0,
					    "06" => 0,
					    "07" => 0,
					    "08" => 0,
					    "09" => 0,
					    "1" => 0,
					    "2" => 0,
					    "3" => 0,
					    "4" => 0,
					    "5" => 0,
					    "6" => 0,
					    "7" => 0,
					    "8" => 0,
					    "9" => 0,
					);
					while($fila2 = mysqli_fetch_array($resultadoNotas)){
						$resultadoP = mysqli_query($con, "SELECT * FROM persona p, nota n WHERE n.ci = '$fila2[ci]' and p.ci = n.ci");
						$resultadoP = mysqli_fetch_array($resultadoP);
						switch ($resultadoP['departamento']) {
							case '01':
								$dep["01"] = ($dep["01"] + $fila2['nota_final']);
								$dep["1"] = ($dep["1"] + 1);
								break;
							case '02':
								$dep["02"] = ($dep["02"] + $fila2['nota_final']);
								$dep["2"] = ($dep["2"] + 1);
								break;
							case '03':
								$dep["03"] = ($dep["03"] + $fila2['nota_final']);
								$dep["3"] = ($dep["3"] + 1);
								break;
							case '04':
								$dep["04"] = ($dep["04"] + $fila2['nota_final']);
								$dep["4"] = ($dep["4"] + 1);
								break;
							case '05':
								$dep["05"] = ($dep["05"] + $fila2['nota_final']);
								$dep["5"] = ($dep["5"] + 1);
								break;
							case '06':
								$dep["06"] = ($dep["06"] + $fila2['nota_final']);
								$dep["6"] = ($dep["6"] + 1);
								break;
							case '07':
								$dep["07"] = ($dep["07"] + $fila2['nota_final']);
								$dep["7"] = ($dep["7"] + 1);
								break;
							case '08':
								$dep["08"] = ($dep["08"] + $fila2['nota_final']);
								$dep["8"] = ($dep["8"] + 1);
								break;
							default:
								$dep["09"] = ($dep["09"] + $fila2['nota_final']);
								$dep["9"] = ($dep["9"] + 1);
								break;
						}
					}
					if($dep['1'] != 0) $dep['01'] = $dep['01']/$dep['1'];
					if($dep['2'] != 0) $dep['02'] = $dep['02']/$dep['2'];
					if($dep['3'] != 0) $dep['03'] = $dep['03']/$dep['3'];
					if($dep['4'] != 0) $dep['04'] = $dep['04']/$dep['4'];
					if($dep['5'] != 0) $dep['05'] = $dep['05']/$dep['5'];
					if($dep['6'] != 0) $dep['06'] = $dep['06']/$dep['6'];
					if($dep['7'] != 0) $dep['07'] = $dep['07']/$dep['7'];
					if($dep['8'] != 0) $dep['08'] = $dep['08']/$dep['8'];
					if($dep['9'] != 0) $dep['09'] = $dep['09']/$dep['9'];

					echo "<td>$dep[01]</td>";
					echo "<td>$dep[02]</td>";
					echo "<td>$dep[03]</td>";
					echo "<td>$dep[04]</td>";
					echo "<td>$dep[05]</td>";
					echo "<td>$dep[06]</td>";
					echo "<td>$dep[07]</td>";
					echo "<td>$dep[08]</td>";
					echo "<td>$dep[09]</td>";
					echo "</tr>";
				}
		?>
		</table>
	</div>