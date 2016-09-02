<?php 
include_once "utils.php";

class tools{
	function connectDB(){
		try{
			$pdo = new PDO(DSN,
	 				USER,
	 				PASS);
			echo "Conección Exitosa";
		}
		catch(PDOException $e){
			echo "Error al connectarnos ".$e->getMessage();
		}
	}

	function disconnectDB($conexion){	
	}
	function getArraySQL($sql){
	}
	function displayTable($rowData){
		//el rowData es Array
	}
	function displayError($title,$message){
	}
}
 
 ?>
