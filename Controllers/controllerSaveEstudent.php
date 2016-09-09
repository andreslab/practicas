<?php 
	include("utilsSave.php");

	
	$nombre_estudiante=$_POST['nombre_estudiante'];
	$apellido_estudiante=$_POST['apellido_estudiante'];
	$cedula_estudiante=$_POST['cedula_estudiante'];

	$action=$_POST['action'];

	if($action=="ACTUALIZAR"){
		$key=$_POST['key'];
		$arraySave=array($key, $nombre_estudiante, $apellido_estudiante, $cedula_estudiante);
		$modelUpdate= new modelUpdate();
		$modelUpdate->estudianteModel($arraySave);
		header("Location:../session.php");
	}else{
		$arraySave=array($nombre_estudiante, $apellido_estudiante, $cedula_estudiante);
		$modelUpdate= new modelAdd();
		$modelUpdate->estudianteModel("isss",$arraySave);
		header("Location:../session.php");
	}
 ?>