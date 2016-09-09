<?php 
	include("utilsSave.php");

	
	$nombre_facultad=$_POST['nombre_facultad'];
	$direccion_facultad=$_POST['direccion_facultad'];
	$telefono_facultad=$_POST['telefono_facultad'];
	$email_facultad=$_POST['email_facultad'];
	$web_facultad=$_POST['web_facultad'];

	$action=$_POST['action'];

	if($action=="ACTUALIZAR"){
		$key=$_POST['key'];
		$arraySave=array($key, $nombre_facultad, $direccion_facultad, $telefono_facultad, $email_facultad, $web_facultad);
		$modelUpdate= new modelUpdate();
		$modelUpdate->facultadModel($arraySave);
		header("Location:../session.php");
	}else{
		$arraySave=array($nombre_facultad, $direccion_facultad, $telefono_facultad, $email_facultad, $web_facultad);
		$modelUpdate= new modelAdd();
		$modelUpdate->facultadModel("isssss",$arraySave);
		header("Location:../session.php");
	}

 ?>