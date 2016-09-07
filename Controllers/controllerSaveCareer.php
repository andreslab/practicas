
<?php 
	include("utilsSave.php");

	
	$nombre_carrera=$_POST['nombre_carrera'];
	$action=$_POST['action'];

	if($action=="ACTUALIZAR"){
		$key=$_POST['key'];
		echo "estoy actualizando";
		$arraySave=array($key, $nombre_carrera);
		$modelUpdate= new modelUpdate();
		$modelUpdate->carreraModel($arraySave);
		header("Loader:session.php");

	}else{
		echo "estoy guardando";

		$arraySave=array($nombre_carrera);
		$modelUpdate= new modelAdd();
		$modelUpdate->carreraModel("is", $arraySave);
		header("Loader:session.php");
	}
 ?>
