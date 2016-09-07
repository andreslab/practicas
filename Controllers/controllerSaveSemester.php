<?php 
	include("utilsSave.php");
	
	
	$nombre_semestre=$_POST['nombre_semestre'];
	$inicio_semestre=$_POST['inicio_semestre'];
	$final_semestre=$_POST['final_semestre'];

	$action=$_POST['action'];

	if($action=="ACTUALIZAR"){
		$key=$_POST['key'];
		echo "estoy actualizando";
		$arraySave=array($key, $nombre_semestre, $inicio_semestre, $final_semestre);
		$modelUpdate= new modelUpdate();
		$modelUpdate->semestreModel($arraySave);
		header("Loader:session.php");
	}else{
		echo "estoy guardando";
		$arraySave=array($nombre_semestre, $inicio_semestre, $final_semestre);
		$modelUpdate= new modelAdd();
		$modelUpdate->semestreModel("isss",$arraySave);
		header("Loader:session.php");
	}
 ?>