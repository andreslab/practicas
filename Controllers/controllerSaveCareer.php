
<?php 
	include("utilsSave.php");

	
	$nombre_carrera=$_POST['nombre_carrera'];
	$action=$_POST['action'];

	if($action=="ACTUALIZAR"){
		$key=$_POST['key'];
		$arraySave=array($key, $nombre_carrera);
		$modelUpdate= new modelUpdate();
		$modelUpdate->carreraModel($arraySave);
		header("Location:../session.php");

	}else{
		$arraySave=array($nombre_carrera);
		$modelUpdate= new modelAdd();
		$modelUpdate->carreraModel("is", $arraySave);
		header("Location:../session.php");
	}
 ?>
