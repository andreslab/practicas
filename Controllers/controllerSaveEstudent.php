<?php 
	include("utilsSave.php");

	
	$nombre_estudiante=$_POST['nombre_estudiante'];
	$apellido_estudiante=$_POST['apellido_estudiante'];
	$cedula_estudiante=$_POST['cedula_estudiante'];

	$action=$_POST['action'];

	if($action=="ACTUALIZAR"){
		$key=$_POST['key'];
		echo "estoy actualizando";
		$arraySave=array($key, $nombre_estudiante, $apellido_estudiante, $cedula_estudiante);
		$modelUpdate= new modelUpdate();
		$modelUpdate->estudianteModel($arraySave);
		header("Loader:session.php");
	}else{
		echo "estoy guardando";
		$arraySave=array($nombre_estudiante, $apellido_estudiante, $cedula_estudiante);
		$modelUpdate= new modelAdd();
		$modelUpdate->estudianteModel("isss",$arraySave);
		header("Loader:session.php");
	}
 ?>