<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	//include("Models/modelUpdate.php");
	include("Controllers/controllerUpdate.php");
	$db = new modelUpdate();
	$v=array(9,"geometria");
	$db->carreraModel($v);
 ?>
</body>
</html>