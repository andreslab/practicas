<?php 
	class requestBusiness{
		function view($con){
		$query="SELECT * FROM empresa";
		$statement= $con->prepare($query);
		$statement->execute(array());
		$result = $statement->fetchAll();
		echo "<table>";
		foreach ($result as $key) {
			echo "<tr>";
				echo "<td>";
					echo $key['cod_empresa'];
				echo "</td>";
				echo "<td>";
					echo $key['nom_empresa'];
				echo "</td>";
				echo "<td>";
					echo $key['repre_empresa'];
				echo "</td>";
				echo "<td>";
					echo $key['cedula_repre'];
				echo "</td>";
				echo "<td>";
					echo $key['tipo_empre'];
				echo "</td>";
				echo "<td>";
					echo $key['direccion_empre'];
				echo "</td>";
				echo "<td>";
					echo $key['tele_empre'];
				echo "</td>";
				echo "<td>";
					echo $key['sitio_web'];
				echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
		}
		function update(){}
		function delete(){}
		function add(){
			echo"<form action='' method='POST'>";
			echo "<label for='nom_empresa'>Nombre</label>";
			echo "<input id='nom_empresa' type='text' name='nom_empresa'  required>";

			echo"<br>";
			echo "<label for='repre_empresa'>Representante</label>";
			echo "<input id='repre_empresa' type='text' name='repre_empresa'  required>";

			echo"<br>";
			echo "<label for='cedula_repre'>Cédula del representante</label>";
			echo "<input id='cedula_repre' type='text' name='cedula_repre'  required>";

			echo"<br>";
			echo "<label for='tipo_empre'>Tipo de Empresa</label>";
			echo "<input id='tipo_empre' type='text' name='tipo_empre'  required>";

			echo"<br>";
			echo "<label for='tele_empre'>Teléfono</label>";
			echo "<input id='tele_empre' type='text' name='tele_empre'  required>";

			echo"<br>";
			echo "<label for='sitio_web'>Sitio Web</label>";
			echo "<input id='sitio_web' type='text' name='sitio_web'  required>";

			echo"<br>";
			echo "<input type='submit' value='submit' id='enviar'>";

			echo"</form>";
		}
	}
 ?>
 