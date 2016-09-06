<?php 

	class viewCompany implements viewStructure{
		public function showAdd(){
			echo"<form action='' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='nombre_empresa'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_empresa' type='text' name='nombre_empresa'  required>";

				echo"<br><br>";
				echo "<label for='representante_empresa'>Representante</label>";
				echo"<br>";
				echo "<input id='representante_empresa' type='text' name='representante_empresa'  required>";

				echo"<br><br>";
				echo "<label for='cedula_represetante'>Cédula del representante</label>";
				echo"<br>";
				echo "<input id='cedula_represetante' type='text' name='cedula_represetante'  required>";

				echo"<br><br>";
				echo "<label for='tipo_empresa'>Tipo</label>";
				echo"<br>";
				echo "<input id='tipo_empresa' type='text' name='tipo_empresa'  required>";

				echo"<br><br>";
				echo "<label for='direccion_empresa'>Dirección</label>";
				echo"<br>";
				echo "<input id='direccion_empresa' type='text' name='direccion_empresa'  required>";

				echo"<br><br>";
				echo "<label for='telefono_empresa'>Teléfono</label>";
				echo"<br>";
				echo "<input id='telefono_empresa' type='text' name='telefono_empresa'  required>";

				echo"<br><br>";
				echo "<label for='web_empresa'>Sitio Web</label>";
				echo"<br>";
				echo "<input id='web_empresa' type='text' name='web_empresa'  required>";

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
						echo $key['codigo_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['representante_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['cedula_represetante'];
					echo "</td>";
					echo "<td>";
						echo $key['tipo_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['direccion_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['telefono_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['web_empresa'];
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

				echo "<label for='nombre_empresa'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_empresa' type='text' name='nombre_empresa' value=".$arrayData[0]." required>";

				echo"<br><br>";
				echo "<label for='representante_empresa'>Representante</label>";
				echo"<br>";
				echo "<input id='representante_empresa' type='text' name='representante_empresa' value=".$arrayData[1]." required>";

				echo"<br><br>";
				echo "<label for='cedula_represetante'>Cédula del representante</label>";
				echo"<br>";
				echo "<input id='cedula_represetante' type='text' name='cedula_represetante' value=".$arrayData[2]." required>";

				echo"<br><br>";
				echo "<label for='tipo_empresa'>Tipo</label>";
				echo"<br>";
				echo "<input id='tipo_empresa' type='text' name='tipo_empresa' value=".$arrayData[3]." required>";

				echo"<br><br>";
				echo "<label for='direccion_empresa'>Dirección</label>";
				echo"<br>";
				echo "<input id='direccion_empresa' type='text' name='direccion_empresa' value=".$arrayData[4]." required>";

				echo"<br><br>";
				echo "<label for='telefono_empresa'>Teléfono</label>";
				echo"<br>";
				echo "<input id='telefono_empresa' type='text' name='telefono_empresa' value=".$arrayData[5]." required>";

				echo"<br><br>";
				echo "<label for='web_empresa'>Sitio Web</label>";
				echo"<br>";
				echo "<input id='web_empresa' type='text' name='web_empresa' value=".$arrayData[6]." required>";

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
						echo $key['codigo_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['representante_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['cedula_represetante'];
					echo "</td>";
					echo "<td>";
						echo $key['tipo_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['direccion_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['telefono_empresa'];
					echo "</td>";
					echo "<td>";
						echo $key['web_empresa'];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
 ?>