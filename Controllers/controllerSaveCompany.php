<?php 
	include("utilsSave.php");

	
	$nombre_empresa=$_POST['nombre_empresa'];
	$representante_empresa=$_POST['representante_empresa'];
	$cedula_represetante=$_POST['cedula_represetante'];
	$tipo_empresa=$_POST['tipo_empresa'];
	$direccion_empresa=$_POST['direccion_empresa'];
	$telefono_empresa=$_POST['telefono_empresa'];
	$web_empresa=$_POST['web_empresa'];

	$action=$_POST['action'];

	if($action=="ACTUALIZAR"){
		$key=$_POST['key'];
		$arraySave=array($key, $nombre_empresa,$representante_empresa,$cedula_represetante,$tipo_empresa,$direccion_empresa,$telefono_empresa,$web_empresa);
		$modelUpdate= new modelUpdate();
		$modelUpdate->empresaModel($arraySave);
		header("Location:../session.php");
	}else{
		$arraySave=array($nombre_empresa,$representante_empresa,$cedula_represetante,$tipo_empresa,$direccion_empresa,$telefono_empresa,$web_empresa);
		$modelUpdate= new modelAdd();
		$modelUpdate->empresaModel("isssssss",$arraySave);
		header("Location:../session.php");
	}
 ?>