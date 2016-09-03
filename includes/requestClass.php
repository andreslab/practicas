<?php 
	class requestClass{
		function view($con){
		$query="SELECT * FROM materia";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		foreach ($result as $key) {
			echo "<tr>";
				echo "<td>";
					echo $key['cod_mate'];
				echo "</td>";
				echo "<td>";
					echo $key['nom_mate'];
				echo "</td>";
				echo "<td>";
					echo $key['curso_mate'];
				echo "</td>";
				echo "<td>";
					echo $key['hora_mate'];
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
 