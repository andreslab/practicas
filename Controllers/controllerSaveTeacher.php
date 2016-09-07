<?php 
	include("utilsSave.php");

	
	$nombre_docente=$_POST['nombre_docente'];
	$apellido_docente=$_POST['apellido_docente'];
	$email_docente=$_POST['email_docente'];

	$action=$_POST['action'];

	if($action=="ACTUALIZAR"){
		$key=$_POST['key'];
		echo "estoy actualizando";
		$arraySave=array($key, $nombre_docente, $apellido_docente, $email_docente);
		$modelUpdate= new modelUpdate();
		$modelUpdate->docenteModel($arraySave);
		header("Loader:session.php");
	}else{
		echo "estoy guardando";

		$arraySave=array($nombre_docente, $apellido_docente, $email_docente);
		$modelUpdate= new modelAdd();
		$modelUpdate->docenteModel("isss", $arraySave);
		header("Loader:session.php");
	}
 ?>