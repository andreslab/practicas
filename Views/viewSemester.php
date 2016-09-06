<?php 

	class viewSemester implements viewStructure{
		public function showAdd(){
			echo"<form action='' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='nombre_semestre'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_semestre' type='text' name='nombre_semestre'  required>";

				echo"<br><br>";
				echo "<label for='inicio_semestre'>Inicio del semestre</label>";
				echo"<br>";
				echo "<input id='inicio_semestre' type='text' name='inicio_semestre'  required>";

				echo"<br><br>";
				echo "<label for='final_semestre'>Fin del semestre</label>";
				echo"<br>";
				echo "<input id='final_semestre' type='text' name='final_semestre'  required>";

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
						echo $key['codigo_semestre'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_semestre'];
					echo "</td>";
					echo "<td>";
						echo $key['inicio_semestre'];
					echo "</td>";
					echo "<td>";
						echo $key['final_semestre'];
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

				echo "<label for='nombre_semestre'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_semestre' type='text' name='nombre_semestre' value=".$arrayData[0]." required>";

				echo"<br><br>";
				echo "<label for='inicio_semestre'>Inicio del semestre</label>";
				echo"<br>";
				echo "<input id='inicio_semestre' type='text' name='inicio_semestre' value=".$arrayData[1]." required>";

				echo"<br><br>";
				echo "<label for='final_semestre'>Fin del semestre</label>";
				echo"<br>";
				echo "<input id='final_semestre' type='text' name='final_semestre' value=".$arrayData[2]." required>";

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
						echo $key['codigo_semestre'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_semestre'];
					echo "</td>";
					echo "<td>";
						echo $key['inicio_semestre'];
					echo "</td>";
					echo "<td>";
						echo $key['final_semestre'];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
 ?>