<?php 

	class viewClass implements viewStructure{
		public function showAdd(){
			echo"<form action='' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='nombre_materia'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_materia' type='text' name='nombre_materia' required>";

				echo"<br><br>";
				echo "<label for='curso_materia'>Curso</label>";
				echo"<br>";
				echo "<input id='curso_materia' type='text' name='curso_materia'  required>";

				echo"<br><br>";
				echo "<label for='hora_materia'>Hora</label>";
				echo"<br>";
				echo "<input id='hora_materia' type='text' name='hora_materia'  required>";

				echo"<br><br>";
				echo "<input type='submit' value='ENVIAR' id='enviar'>";

			echo"</form>";
		}
		public function showDelete($result){
			echo "<table>";
			echo"<br><br><br><br>";
			foreach ($result as $key) {
				echo "<tr>";
					echo "<td>";
						echo $key['codigo_materia'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_materia'];
					echo "</td>";
					echo "<td>";
						echo $key['curso_materia'];
					echo "</td>";
					echo "<td>";
						echo $key['hora_materia'];
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

				echo "<label for='nombre_materia'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_materia' type='text' name='nombre_materia' value=".$arrayData[0]." required>";

				echo"<br><br>";
				echo "<label for='curso_materia'>Curso</label>";
				echo"<br>";
				echo "<input id='curso_materia' type='text' name='curso_materia' value=".$arrayData[1]." required>";

				echo"<br><br>";
				echo "<label for='hora_materia'>Hora</label>";
				echo"<br>";
				echo "<input id='hora_materia' type='text' name='hora_materia' value=".$arrayData[2]." required>";

				echo"<br><br>";
				echo "<input type='submit' value='ACTUALIZAR' id='enviar'>";

			echo"</form>";
		}
		public function showView($result){
			echo "<table>";
			echo"<br><br><br><br>";
			foreach ($result as $key) {
				echo "<tr>";
					echo "<td>";
						echo $key['codigo_materia'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_materia'];
					echo "</td>";
					echo "<td>";
						echo $key['curso_materia'];
					echo "</td>";
					echo "<td>";
						echo $key['hora_materia'];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
 ?>