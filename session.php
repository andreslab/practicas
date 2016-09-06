<?php include("includes/incHead.php"); ?>
<script type="text/javascript" src="js/configInit.js"></script>
<script type="text/javascript" src="js/ActionButton.js"></script>
<link rel="stylesheet" type="text/css" href="css/styleElements.css">
<link rel="stylesheet" type="text/css" href="css/styleMain.css">

		<section id="menu"><br><br><br><br>
			<?php include("includes/incMenu.php"); ?>

		</section>
		<section id="view"><br><br><br><br><br><br>
			<?php include("includes/toolBar.php"); ?>
			<br><br><br><br><br><br>
			<div id="show">
			<table>
				<tr>
				  <td><strong>Curso</strong></td>
				  <td><strong>Horas</strong></td>
				  <td><strong>Horario</strong></td>
				</tr>
				 
				<tr>
				  <td>CSS</td>
				  <td>20</td>
				  <td>16:00 - 20:00</td>
				</tr>
				 
				<tr>
				  <td>HTML</td>
				  <td>20</td>
				  <td>16:00 - 20:00</td>
				</tr>
				 <?php for ($i=0; $i < 50; $i++) { 
				 	# code...
				  ?>
				<tr>
				  <td>Dreamweaver</td>
				  <td>60</td>
				  <td>16:00 - 20:00</td>
				</tr>

				<?php }?>

				</table>
			</div>
		</section>
</body>
</html>