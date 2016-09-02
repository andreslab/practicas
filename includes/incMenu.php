<?php 
	$topic=array("Estudiantes","Profesores","Empresas","Materia");
	$subTopic=array("Vista","Actualizar", "Eliminar", "Agregar");
	echo "<ul>";
		echo "<li>Inicio</li>";
		for ($i=0; $i < count($topic); $i++) { 
			echo"<li>";
				echo $topic[$i];
				echo "<ul>";
					for ($e=0; $e < count($subTopic); $e++) { 
						echo"<li>";
							echo $subTopic[$e];
						echo"</li>";
					}
				echo "</ul>";
			echo"</li>";
		}
	echo "</ul>";
 ?>