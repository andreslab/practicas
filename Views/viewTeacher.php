<?php 

	class viewTeacher implements viewStructure{
		public function showAdd(){
			echo"<form action='Controllers/controllerSaveTeacher.php' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='action'>Acción</label>";
				echo"<br>";
				echo "<input id='action' type='text' name='action' value='INGRESO' readonly>";
				echo"<br><br>";

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
			echo"<form action='Controllers/controllerSaveTeacher.php' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='action'>Acción</label>";
				echo"<br>";
				echo "<input id='action' type='text' name='action' value='ACTUALIZAR' readonly>";
				echo"<br><br>";

				echo "<input type='text' id='privado' name='key' value='".$arrayData[0]."' readonly>";
				echo"<br>";

				echo "<label for='nombre_docente'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_docente' type='text' name='nombre_docente' value=".$arrayData[1]." required>";

				echo"<br><br>";
				echo "<label for='apellido_docente'>Apellido</label>";
				echo"<br>";
				echo "<input id='apellido_docente' type='text' name='apellido_docente' value=".$arrayData[2]." required>";

				echo"<br><br>";
				echo "<label for='email_docente'>Correo Electrónico</label>";
				echo"<br>";
				echo "<input id='email_docente' type='text' name='email_docente' value=".$arrayData[3]." required>";

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
				echo "</tr>";
				$count++;
			}
			echo "</table>";
			echo "<div id='total'>".$count
			."</div>";
		}
	}
 ?>