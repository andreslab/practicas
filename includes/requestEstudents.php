<?php 
	class requestEstudents{	
		function view($con){
		$query="SELECT * FROM estudiante";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		foreach ($result as $key) {
			echo "<tr>";
				echo "<td>";
					echo $key['cod_estu'];
				echo "</td>";
				echo "<td>";
					echo $key['nombre_estu'];
				echo "</td>";
				echo "<td>";
					echo $key['apellido_estu'];
				echo "</td>";
				echo "<td>";
					echo $key['cedula'];
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
 