<?php 
	include("utilsSave.php");

	
	$nombre_materia=$_POST['nombre_materia'];
	$curso_materia=$_POST['curso_materia'];
	$hora_materia=$_POST['hora_materia'];

	$action=$_POST['action'];

	if($action=="ACTUALIZAR"){
		$key=$_POST['key'];
		$arraySave=array($key, $nombre_materia, $curso_materia, $hora_materia);
		$modelUpdate= new modelUpdate();
		$modelUpdate->materiaModel($arraySave);
		header("Location:../session.php");
	}else{
		$arraySave=array($nombre_materia, $curso_materia, $hora_materia);
		$modelUpdate= new modelAdd();
		$modelUpdate->materiaModel("isss", $arraySave);
		header("Location:../session.php");
	}
 ?>