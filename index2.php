<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	include("Models/modelView.php");

	$db = new modelView();
	$t= $db->carreraModel();
	echo "<pre>";
		while($e = $t->fetch_row()){
			echo $e[1];
		}
	echo "</pre>";


 ?>
</body>
</html>