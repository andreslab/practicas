<?php 

	class viewFaculty implements viewStructure{
		public function showAdd(){
			echo"<form action='' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='nombre_facultad'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_facultad' type='text' name='nombre_facultad'  required>";

				echo"<br><br>";
				echo "<label for='direccion_facultad'>Dirección</label>";
				echo"<br>";
				echo "<input id='direccion_facultad' type='text' name='direccion_facultad'  required>";

				echo"<br><br>";
				echo "<label for='telefono_facultad'>Teléfono</label>";
				echo"<br>";
				echo "<input id='telefono_facultad' type='text' name='telefono_facultad'  required>";

				echo"<br><br>";
				echo "<label for='email_facultad'>Correo Electrónico</label>";
				echo"<br>";
				echo "<input id='email_facultad' type='text' name='email_facultad'  required>";

				echo"<br><br>";
				echo "<label for='web_facultad'>Sitio Web</label>";
				echo"<br>";
				echo "<input id='web_facultad' type='text' name='web_facultad'  required>";

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
						echo $key['codigo_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['direccion_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['telefono_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['email_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['web_facultad'];
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

				echo "<label for='nombre_facultad'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_facultad' type='text' name='nombre_facultad' value=".$arrayData[0]." required>";

				echo"<br><br>";
				echo "<label for='direccion_facultad'>Dirección</label>";
				echo"<br>";
				echo "<input id='direccion_facultad' type='text' name='direccion_facultad' value=".$arrayData[1]." required>";

				echo"<br><br>";
				echo "<label for='telefono_facultad'>Teléfono</label>";
				echo"<br>";
				echo "<input id='telefono_facultad' type='text' name='telefono_facultad' value=".$arrayData[2]." required>";

				echo"<br><br>";
				echo "<label for='email_facultad'>Correo Electrónico</label>";
				echo"<br>";
				echo "<input id='email_facultad' type='text' name='email_facultad' value=".$arrayData[3]." required>";

				echo"<br><br>";
				echo "<label for='web_facultad'>Sitio Web</label>";
				echo"<br>";
				echo "<input id='web_facultad' type='text' name='web_facultad' value=".$arrayData[4]." required>";

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
						echo $key['codigo_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['direccion_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['telefono_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['email_facultad'];
					echo "</td>";
					echo "<td>";
						echo $key['web_facultad'];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
 ?>