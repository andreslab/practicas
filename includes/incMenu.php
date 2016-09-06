<?php 
	$topic=array("Inicio",
				"Carreras",
				"Empresas",
				"Estudiantes",
				"Docentes",
				"Facultad",
				"Materias",
				"Semestres");

	echo "<ul>";
		for ($i=0; $i < count($topic); $i++) { 
			echo"<li id='t".$i."' class='item' onclick='Item(this.id)'>";
				echo $topic[$i];
			echo"</li>";
		}
	echo "</ul>";
 ?>