<?php include("includes/incHead.php"); ?>
<?php include("includes/connectionDB.php"); ?>
<?php include("includes/requestUtils.php"); ?>

<link rel="stylesheet" type="text/css" href="css/styleMain.css">
		<section id="menu"><br><br><br><br>
			<?php include("includes/incMenu.php"); ?>
		</section>
		<section id="view"><br><br><br><br>
			<?php
				//vista de los datos de la tabla estudiante
				$view=new requestEstudents;
				$view->view($con);
			?>
	</section>
</body>
</html>