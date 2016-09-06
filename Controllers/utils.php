<?php 

	require_once("../config.php");
	require_once("../Resources/requestList.php");
	require_once("../Resources/utils.php");
	require_once("../Resources/database.php");

	require_once("controllerStructure.php");

	require_once("../Models/modelStructure.php");
	require_once("../Models/modelAdd.php");
	require_once("../Models/modelDelete.php");
	require_once("../Models/modelUpdate.php");
	require_once("../Models/modelView.php");
	
	require_once("../Views/ViewStructure.php");
	require_once("../Views/viewCareer.php");
	require_once("../Views/viewClass.php");
	require_once("../Views/ViewCompany.php");
	require_once("../Views/viewEstudent.php");
	require_once("../Views/viewFaculty.php");
	require_once("../Views/viewSemester.php");
	require_once("../Views/viewTeacher.php");
	require_once("../Views/viewUser.php");

	
	

	/*spl_autoload_register(function($clase){
		$ruta = "../Models/".$clase.".php";
		if(is_readable($ruta)){
			require_once($ruta);
			echo "archivo valido";
			echo $ruta;
		}else{
			echo "archivo no existe";
			echo $ruta;
		}
	});

	spl_autoload_register(function($clase){
		$ruta = "../Views/".$clase.".php";
		if(is_readable($ruta)){
			require_once($ruta);
			echo "archivo valido";
			echo $ruta;
		}else{
			echo "archivo no existe";
			echo $ruta;
		}
	});

	spl_autoload_register(function($clase){
		$ruta = "../Resources/".$clase.".php";
		if(is_readable($ruta)){
			require_once($ruta);
			echo "archivo valido";
			echo $ruta;
		}else{
			echo "archivo no existe";
			echo $ruta;
		}
	});*/
	
	/*require("Models/modelAdd.php");
	require("Models/modelDelete.php");
	require("Models/modelUpdate.php");
	require("Models/modelView.php");

	require("Views/viewAdd.php");
	require("Views/viewDelete.php");
	require("Views/viewUpdate.php");
	require("Views/viewView.php");*/
 ?>