<?php 

	class viewCareer implements viewStructure{
		public function showAdd(){
			echo"<form action='' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='nombre_carrera'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_carrera' type='text' name='nombre_carrera'  required>";

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
						echo "<img src='img/icon/delete.svg'>";
					echo "</td>";
					echo "<td>";
						echo $key['codigo_carrera'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_carrera'];
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

				echo "<label for='nombre_carrera'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_carrera' type='text' name='nombre_carrera'  value=".$arrayData[0]." required>";

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
						echo $key['codigo_carrera'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_carrera'];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
 ?>