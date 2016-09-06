<?php 

	class viewTeacher implements viewStructure{
		public function showAdd(){
			echo"<form action='' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='nombre_docente'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_docente' type='text' name='nombre_docente'  required>";

				echo"<br><br>";
				echo "<label for='apellido_docente'>Apellido</label>";
				echo"<br>";
				echo "<input id='apellido_docente' type='text' name='apellido_docente'  required>";

				echo"<br><br>";
				echo "<label for='email_docente'>Correo Electrónico</label>";
				echo"<br>";
				echo "<input id='email_docente' type='text' name='email_docente'  required>";

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
						echo $key['codigo_docente'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_docente'];
					echo "</td>";
					echo "<td>";
						echo $key['apellido_docente'];
					echo "</td>";
					echo "<td>";
						echo $key['email_docente'];
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

				echo "<label for='nombre_docente'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_docente' type='text' name='nombre_docente' value=".$arrayData[0]." required>";

				echo"<br><br>";
				echo "<label for='apellido_docente'>Apellido</label>";
				echo"<br>";
				echo "<input id='apellido_docente' type='text' name='apellido_docente' value=".$arrayData[1]." required>";

				echo"<br><br>";
				echo "<label for='email_docente'>Correo Electrónico</label>";
				echo"<br>";
				echo "<input id='email_docente' type='text' name='email_docente' value=".$arrayData[2]." required>";

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
						echo $key['codigo_docente'];
					echo "</td>";
					echo "<td>";
						echo $key['nombre_docente'];
					echo "</td>";
					echo "<td>";
						echo $key['apellido_docente'];
					echo "</td>";
					echo "<td>";
						echo $key['email_docente'];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
 ?>