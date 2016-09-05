<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	include("Models/modelUpdate.php");

	$db = new modelUpdate();
	$v=array(5,"geometria");
	$db->carreraModel($v);
	
	


 ?>
</body>
</html>