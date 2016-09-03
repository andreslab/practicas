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
		function update($con){
		$query="SELECT * FROM docente_tutor";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		foreach ($result as $key) {
			echo "<tr>";
				echo "<td>";
					echo "<img src='img/icon/edit.svg'>";
				echo "</td>";
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
		function delete($con){
		$query="SELECT * FROM docente_tutor";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		foreach ($result as $key) {
			echo "<tr>";
				echo "<td>";
					echo "<img src='img/icon/delete.svg'>";
				echo "</td>";
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
		function add(){
			echo"<form action='' method='POST' >";
			echo "<label for='nom_doc'>Nombre</label>";
			echo"<input id='nom_doc' type='text' name='nom_doc' required>";

			echo"<br>";
			echo "<label for='ape_doc'>Apellido</label>";
			echo"<input id='ape_doc' type='text' name='ape_doc' required>";

			echo"<br>";
			echo "<label for='email_doc'>Email</label>";
			echo"<input id='email_doc' type='text' name='email_doc' required>";

			echo"<br>";
			echo"<input type='submit' required>";
			echo"</form>";
		}
	}
 ?>
 