<?php 
	require("Controllers/controllerStructure.php");

	/*class utils{
		public static function callClass($clase){
		$ruta = "Models/model".$clase.".php";
		require_once($ruta);
		}
	}*/

	spl_autoload_register(function($clase){
		$ruta = "Models/".$clase.".php";
		if(is_readable($ruta)){
			require_once($ruta);
			echo "archivo valido";
			echo $ruta;
		}else{
			echo "archivo no existe";
			echo $ruta;
		}
		

	});
	
 ?>