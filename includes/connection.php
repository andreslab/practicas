<?php 

$dsn = "mysql:dbname=uni_2016-1;host=127.0.0.1";
$user = "root";
$password= "";

try{
	$pdo = new PDO($dsn,
	 				$user,
	 				$password);
	echo "Conección Exitosa";
}
catch(PDOException $e){
	echo "Error al connectarnos".$e->getMessage();
}

 ?>
