<?php 
	class requestBusiness{
		function view($con){
		$query="SELECT * FROM empresa";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		foreach ($result as $key) {
			echo "<tr>";
				echo "<td>";
					echo $key['cod_empresa'];
				echo "</td>";
				echo "<td>";
					echo $key['nom_empresa'];
				echo "</td>";
				echo "<td>";
					echo $key['repre_empresa'];
				echo "</td>";
				echo "<td>";
					echo $key['cedula_repre'];
				echo "</td>";
				echo "<td>";
					echo $key['tipo_empre'];
				echo "</td>";
				echo "<td>";
					echo $key['direccion_empre'];
				echo "</td>";
				echo "<td>";
					echo $key['tele_empre'];
				echo "</td>";
				echo "<td>";
					echo $key['sitio_web'];
				echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
		}
		function update(){}
		function delete(){}
		function add(){}
	}
 ?>
 