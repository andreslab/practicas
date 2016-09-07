<?php 

	class viewCompany implements viewStructure{
		public function showAdd(){
			echo"<form action='Controllers/controllerSaveCompany.php' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='action'>Acción</label>";
				echo"<br>";
				echo "<input id='action' type='text' name='action' value='INGRESO' readonly>";
				echo"<br><br>";

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
					echo "<td>";
						echo $key[4];
					echo "</td>";
					echo "<td>";
						echo $key[5];
					echo "</td>";
					echo "<td>";
						echo $key[6];
					echo "</td>";
					echo "<td>";
						echo $key[7];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";

			echo"<br><br>";
			echo"<button type='button'>Borrar</button>";
 			echo"<button type='button'>Cancelar</button>";
		}
		public function showUpdate($arrayData){
			echo"<form action='Controllers/controllerSaveCompany.php' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='action'>Acción</label>";
				echo"<br>";
				echo "<input id='action' type='text' name='action' value='ACTUALIZAR' readonly>";
				echo"<br><br>";

				echo "<input type='text' id='privado' name='key' value='".$arrayData[0]."' readonly>";
				echo"<br>";

				echo "<label for='nombre_empresa'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_empresa' type='text' name='nombre_empresa' value=".$arrayData[1]." required>";

				echo"<br><br>";
				echo "<label for='representante_empresa'>Representante</label>";
				echo"<br>";
				echo "<input id='representante_empresa' type='text' name='representante_empresa' value=".$arrayData[2]." required>";

				echo"<br><br>";
				echo "<label for='cedula_represetante'>Cédula del representante</label>";
				echo"<br>";
				echo "<input id='cedula_represetante' type='text' name='cedula_represetante' value=".$arrayData[3]." required>";

				echo"<br><br>";
				echo "<label for='tipo_empresa'>Tipo</label>";
				echo"<br>";
				echo "<input id='tipo_empresa' type='text' name='tipo_empresa' value=".$arrayData[4]." required>";

				echo"<br><br>";
				echo "<label for='direccion_empresa'>Dirección</label>";
				echo"<br>";
				echo "<input id='direccion_empresa' type='text' name='direccion_empresa' value=".$arrayData[5]." required>";

				echo"<br><br>";
				echo "<label for='telefono_empresa'>Teléfono</label>";
				echo"<br>";
				echo "<input id='telefono_empresa' type='text' name='telefono_empresa' value=".$arrayData[6]." required>";

				echo"<br><br>";
				echo "<label for='web_empresa'>Sitio Web</label>";
				echo"<br>";
				echo "<input id='web_empresa' type='text' name='web_empresa' value=".$arrayData[7]." required>";

				echo"<br><br>";
				echo "<input type='submit' value='ACTUALIZAR' id='enviar'>";
				echo "<input type='reset'>";
			echo"</form>";
		}
		public function showView($result){
			$count=0;
			echo "<table>";
			echo"<br><br><br><br>";
			while($key = $result->fetch_row()){
				echo "<tr>";
					echo "<td>";
						echo "<input type='checkbox' id='_".$key[0]."'>";
					echo "</td>";
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
					echo "<td>";
						echo $key[4];
					echo "</td>";
					echo "<td>";
						echo $key[5];
					echo "</td>";
					echo "<td>";
						echo $key[6];
					echo "</td>";
					echo "<td>";
						echo $key[7];
					echo "</td>";
				echo "</tr>";
				$count++;
			}
			echo "</table>";
			echo "<div id='total'>".$count
			."</div>";
		}
	}
 ?>