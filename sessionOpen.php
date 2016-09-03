<?php include("includes/incHead.php"); ?>
<?php include("includes/connectionDB.php"); ?>
<?php include("includes/validateUser.php"); ?>
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
					$updateES=new requestEstudents;
					$updateES->update($con);
				?>
			</div>
			<div id="deleteEs">
				<?php  
					$deleteES=new requestEstudents;
					$deleteES->delete($con);
				?>
			</div>
			<div id="addEs">
				<?php  
					$addES=new requestEstudents;
					$addES->add($con);
				?>
			</div>
			<!-------------------------------------->
			<div id="viewT">
				<?php  
					$viewT=new requestTeacher;
					$viewT->view($con);
				?>
			</div>
			<div id="updateT">
				<?php  
					$updateT=new requestTeacher;
					$updateT->update($con);
				?>
			</div>
			<div id="deleteT">
				<?php  
					$deleteT=new requestTeacher;
					$deleteT->delete($con);
				?>
			</div>
			<div id="addT">
				<?php  
					$addT=new requestTeacher;
					$addT->add($con);
				?>
			</div>
			<!-------------------------------------->
			<div id="viewB">
				<?php  
					$viewB=new requestBusiness;
					$viewB->view($con);
				?>
			</div>
			<div id="updateB">
				<?php  
					$updateB=new requestBusiness;
					$updateB->update($con);
				?>
			</div>
			<div id="deleteB">
				<?php  
					$deleteB=new requestBusiness;
					$deleteB->delete($con);
				?>
			</div>
			<div id="addB">
				<?php  
					$addB=new requestBusiness;
					$addB->add($con);
				?>
			</div>
			<!------------------------------------>
			<div id="viewC">
				<?php  
					$viewC=new requestClass;
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