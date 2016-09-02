<?php 
include_once "utils.php";

class tools{
	function connectDB(){
		
			$link = new PDO(DSN,
	 				USER,
	 				PASS);
			echo "<script>alert('Conección a DB Exitosa');</script>";

			return $link;
		
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
