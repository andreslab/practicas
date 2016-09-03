<?php 
	class requestEstudents{	
		function view($con){
		$query="SELECT * FROM estudiante";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		echo"<br><br><br><br>";
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
		function update($con){
		$query="SELECT * FROM estudiante";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		echo"<br><br><br><br>";
		foreach ($result as $key) {
			echo "<tr>";
				echo "<td>";
					echo "<img src='img/icon/edit.svg'>";
				echo "</td>";
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
		function delete($con){
		$query="SELECT * FROM estudiante";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		echo"<br><br><br><br>";
		foreach ($result as $key) {
			echo "<tr>";
				echo "<td>";
					echo "<img src='img/icon/delete.svg'>";
				echo "</td>";
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
		function add(){
			echo"<form action='' method='POST'>";
			echo"<br><br><br><br>";
 			echo"<section class='both'>";
			echo"<label for='nombre_estu'>Nombre</label>";
			echo"<br><br>";
			echo"<input id='nombre_estu' type='text' name='nombre_estu'  required>";
			echo"</section>";

			echo"<section class='both'>";
			echo"<label for='apellido_estu'>Apellido</label>";
			echo"<br><br>";
			echo"<input id='apellido_estu' type='text' name='apellido_estu'  required>";
			echo"</section>";
			

			echo"<br><br>";
			echo"<label for='cedula'>Cédula</label>";
			echo"<br><br>";
			echo"<input id='cedula' type='text' name='cedula'  required>";
			echo"<br><br>";

			echo"<section class='both'>";
			echo"<label for='carrera'>Carrera</label>";
			echo"<br><br>";
			echo"<input id='carrera' type='text' name='carrera'  required>";
			echo"</section>";

			echo"<section class='both'>";
			echo"<br><br>";
			echo"<label for='materia'>Materia</label>";
			echo"<br><br>";
			echo"<input id='materia' type='text' name='materia'  required>";
			echo"</section>";

			echo"<br><br>";
			echo"<label for='semestre'>Semestre</label>";
			echo"<br><br>";
			echo"<input id='semestre' type='text' name='semestre'  required>";

			echo"<br><br>";
			echo"<label for='docente'>Docente</label>";
			echo"<br><br>";
			echo"<input id='docente' type='text' name='docente'  required>";

			echo"<br><br>";
			echo"<label for='empresa'>Empresa</label>";
			echo"<br><br>";
			echo"<input id='empresa' type='text' name='empresa'  required>";

			echo"<br><br>";
			echo"<section class='both'>";
			echo"<label for='inicio'>Inicio de Horas</label>";
			echo"<br><br>";
			echo"<input id='inicio' type='text' name='inicio'  required>";
			echo"</section>";

			echo"<section class='both'>";
			echo"<br><br>";
			echo"<label for='culminacion'>Culminación de Horas</label>";
			echo"<br><br>";
			echo"<input id='culminacion' type='text' name='culminacion'  required>";
			echo"</section>";

			echo"<br><br>";
			echo"<input type='submit' required>";
			echo"</form>";

		}
	}
 ?>
 