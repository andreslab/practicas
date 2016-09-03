<?php 
	class requestTeacher{
		function view($con){
		$query="SELECT * FROM docente_tutor";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		foreach ($result as $key) {
			echo "<tr>";
				echo "<td>";
					echo $key['cod_doc'];
				echo "</td>";
				echo "<td>";
					echo $key['nom_doc'];
				echo "</td>";
				echo "<td>";
					echo $key['ape_doc'];
				echo "</td>";
				echo "<td>";
					echo $key['email_doc'];
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
 