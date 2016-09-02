<?php include("includes/incHead.php"); ?>
<?php include("includes/connectionDB.php"); ?>
<?php include("includes/requestUtils.php"); ?>

<link rel="stylesheet" type="text/css" href="css/styleMain.css">
		<section id="menu"><br><br><br><br>
			<?php include("includes/incMenu.php"); ?>

		</section>
		<section id="view"><br><br><br><br>

			<script type="text/javascript" src="js/testActionButton.js"></script>
			<!--Manera no delicada-->
			<div id="viewEs">
				<?php  
					$viewES=new requestEstudents;
					$viewES->view($con);
				?>
			</div>
			<div id="updateEs">
				<?php  
					
				?>
			</div>
			<div id="deleteEs">
				<?php  
					
				?>
			</div>
			<div id="addEs">
				<?php  
					
				?>
			</div>
			<!--******************************-->
			<div id="viewT">
				<?php  $viewT=new requestTeacher;
					$viewT->view($con);
					?>
			</div>
			<div id="updateT">
				<?php  
					?>
			</div>
			<div id="deleteT">
				<?php  
					?>
			</div>
			<div id="addT">
				<?php  
					?>
			</div>
			<!--******************************-->
			<div id="viewB">
				<?php  $viewB=new requestBusiness;
					$viewB->view($con);
					?>
			</div>
			<div id="updateB">
				<?php  
					?>
			</div>
			<div id="deleteB">
				<?php 
					?>
			</div>
			<div id="addB">
				<?php  
					?>
			</div>
			<!--******************************-->
			<div id="viewC">
				<?php  $viewC=new requestClass;
					$viewC->view($con);
					?>
			</div>
			<div id="updateC">
				<?php  
					?>
			</div>
			<div id="deleteC">
				<?php  
					?>
			</div>
			<div id="addC">
				<?php  
					?>
			</div>
			<script type="text/javascript" src="js/contentAction.js"></script>
	</section>
</body>
</html>