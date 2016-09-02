<?php 
	$topic=array("Estudiantes","Profesores","Empresas","Materias");
	$subTopic=array("Vista","Actualizar", "Eliminar", "Agregar");
	echo "<ul>";
		echo "<li class='item'>Inicio</li>";
		for ($i=0; $i < count($topic); $i++) { 
			echo"<li id='t".$i."' class='item' onclick='executeItem".$i."()'>";
				echo $topic[$i];
				echo "<ul>";
					for ($e=0; $e < count($subTopic); $e++) { 
						echo"<li id='t".$i."_".$e."'class='subitem' onclick='execute".$i."_".$e."()'>";
							echo $subTopic[$e];
						echo"</li>";
					}
				echo "</ul>";
			echo"</li>";
		}
	echo "</ul>";
 ?>