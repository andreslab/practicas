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
		function add(){
			echo"<form action='' method='POST'>";
 	
			echo"<label for='nombre_estu'>Nombre</label>";
			echo"<input id='nombre_estu' type='text' name='nombre_estu'  required>";

			echo"<br>";
			echo"<label for='apellido_estu'>Apellido</label>";
			echo"<input id='apellido_estu' type='text' name='apellido_estu'  required>";

			echo"<br>";
			echo"<label for='cedula'>Cédula</label>";
			echo"<input id='cedula' type='text' name='cedula'  required>";

			echo"<br>";
			echo"<label for='carrera'>Carrera</label>";
			echo"<input id='carrera' type='text' name='carrera'  required>";

			echo"<br>";
			echo"<label for='materia'>Materia</label>";
			echo"<input id='materia' type='text' name='materia'  required>";

			echo"<br>";
			echo"<label for='semestre'>Semestre</label>";
			echo"<input id='semestre' type='text' name='semestre'  required>";

			echo"<br>";
			echo"<label for='docente'>Docente</label>";
			echo"<input id='docente' type='text' name='docente'  required>";

			echo"<br>";
			echo"<label for='empresa'>Empresa</label>";
			echo"<input id='empresa' type='text' name='empresa  required>";

			echo"<br>";
			echo"<label for='inicio'>Inicio de Horas</label>";
			echo"<input id='inicio' type='text' name='inicio  required>";

			echo"<br>";
			echo"<label for='culminacion'>Culminación de Horas</label>";
			echo"<input id='culminacion' type='text' name='culminacion  required>";

			echo"<br>";
			echo"<input type='submit>";
			echo"</form>";

		}
	}
 ?>
 