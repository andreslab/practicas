<?php include("includes/incHead.php") ?>
<body>
	<link rel="stylesheet" type="text/css" href="css/styleLog.css">
	<section id="head">
		<div id="logo">
			<img id="img_logo" src="img/LOGO-UCSG2.png">
		</div>
	</section>
	<section id="logBox">
		<form action="sesionLog.php" method="POST">
			<div class="inputContent">
				<img class="icon" src="img/icon/user.svg">
				<input class="inputEdit" type="text" name="user" maxlength="30">
			</div>
			<div class="inputContent">
				<img class="icon" src="img/icon/lock.svg">
				<input class="inputEdit" type="password" name="pass" maxlength="10">
			</div>
			<input type="submit" name="send" value="Go">
		</form>
		<a href="newUser.php">Create User</a>
	</section>
	<?php 
		include_once "resources/tools.php";
	 
		$connect= new tools();
		$connect->connectDB();
	 ?>
</body>
</html>