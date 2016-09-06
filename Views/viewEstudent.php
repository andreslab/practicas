<?php 

	class viewEstudent implements viewStructure{
		public function showAdd(){
			echo"<form action='' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='nombre_estudiante'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_estudiante' type='text' name='nombre_estudiante'  required>";

				echo"<br><br>";
				echo "<label for='apellido_estudiante'>Apellido</label>";
				echo"<br>";
				echo "<input id='apellido_estudiante' type='text' name='apellido_estudiante'  required>";

				echo"<br><br>";
				echo "<label for='cedula_estudiante'>Cédula</label>";
				echo"<br>";
				echo "<input id='cedula_estudiante' type='text' name='cedula_estudiante'  required>";

				echo"<br><br>";
				echo "<input type='submit' value='ENVIAR' id='enviar'>";
			echo"</form>";
		}
		public function showDelete($result){
			echo "<table>";
			echo"<br><br><br><br>";
			while($key = $result->fetch_row()){
				echo "<tr>";
					echo "<td>";
						echo $key[0];
					echo "</td>";
					echo "<td>";
						echo $key[1];
					echo "</td>";
					echo "<td>";
						echo $key[2];
					echo "</td>";
					echo "<td>";
						echo $key[3];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";

			echo"<br><br>";
			echo"<button type='button'>Borrar</button>";
 			echo"<button type='button'>Cancelar</button>";
		}
		public function showUpdate($arrayData){
			echo"<form action='' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='nombre_estudiante'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_estudiante' type='text' name='nombre_estudiante' value=".$arrayData[0]." required>";

				echo"<br><br>";
				echo "<label for='apellido_estudiante'>Apellido</label>";
				echo"<br>";
				echo "<input id='apellido_estudiante' type='text' name='apellido_estudiante' value=".$arrayData[1]." required>";

				echo"<br><br>";
				echo "<label for='cedula_estudiante'>Cédula</label>";
				echo"<br>";
				echo "<input id='cedula_estudiante' type='text' name='cedula_estudiante' value=".$arrayData[2]." required>";

				echo"<br><br>";
				echo "<input type='submit' value='ACTUALIZAR' id='enviar'>";

			echo"</form>";
		}
		public function showView($result){
			echo "<table>";
			echo"<br><br><br><br>";
			while($key = $result->fetch_row()){
				echo "<tr>";
					echo "<td>";
						echo $key[0];
					echo "</td>";
					echo "<td>";
						echo $key[1];
					echo "</td>";
					echo "<td>";
						echo $key[2];
					echo "</td>";
					echo "<td>";
						echo $key[3];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
 ?>