<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	//include("Models/modelUpdate.php");
	/*include("Controllers/controllerUpdate.php");
	$db = new modelUpdate();
	$v=array(9,"geometria");
	$db->carreraModel($v);
*/

 ?>
 <meta charset="utf-8">
 <form>
 	<input type="text" name="c" value="jaime">
 </form>
 	<button type="button">Borrar</button>
 	<button type="button">Cancelar</button>

 	<link rel="stylesheet" type="text/css" href="css/styleElements.css">

 	<?php include("includes/toolBar.php"); ?>

 	<?php 

 	$frutas = array("roja","manzana","guineo","melon");
 	echo serialize($frutas);

 	echo "<table>";
 	echo "<tr>";
					
			echo "<td>";
						echo "jaime";
			echo "</td>";
					echo "<td>";
						echo "<input type='checkbox' name='vehicle1' value='Bike'/>";
					echo "</td>";
					echo "<td>";
						echo "saluda";
					echo "</td>";
				echo "</tr>";
 	echo "</table>";


 	
	echo "<input type='checkbox' id='_".$key[0]."'>";

	echo "<form>";
						echo "<input type='checkbox' id='_'>";
	echo "</form>";
				

 	echo "<div>";
		echo "<img onclick=alert('borrar') src='img/icon/delete.svg'>";
		echo "<img onclick=alert('editar') src='img/icon/delete_m.svg'>";
		echo "<img onclick=alert('add') src='img/icon/delete_b.svg'>";
	echo "</div>";

	echo "<div>";
		echo "<img onclick=alert('borrar') src='img/icon/edit.svg'>";
		echo "<img onclick=alert('editar') src='img/icon/edit_m.svg'>";
		echo "<img onclick=alert('add') src='img/icon/edit_b.svg'>";
	echo "</div>";

	echo "<div>";
		echo "<img onclick=alert('borrar') src='img/icon/add.svg'>";
		echo "<img onclick=alert('editar') src='img/icon/add_m.svg'>";
		echo "<img onclick=alert('add') src='img/icon/add_b.svg'>";
	echo "</div>";

	echo "<br>";
	echo "<br>";

	echo "<div>";
		echo "<img onclick=alert('borrar') src='img/icon/edit_m.svg'>";
		echo "<img onclick=alert('editar') src='img/icon/add_m.svg'>";
		echo "<img onclick=alert('add') src='img/icon/delete_m.svg'>";
	echo "</div>";
 	 ?>
</body>
</html>