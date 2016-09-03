<?php include("includes/incHead.php") ?>

	<link rel="stylesheet" type="text/css" href="css/styleLog.css">
	<section id="logBox">
		<form action="sessionOpen.php" method="POST">
			<div class="inputContent">
				<img class="icon" src="img/icon/user.svg">
				<input class="inputEdit" type="text" name="inputName" maxlength="30">
			</div>
			<div class="inputContent">
				<img class="icon" src="img/icon/lock.svg">
				<input class="inputEdit" type="password" name="inputPass" maxlength="10">
			</div>
			<input type="submit" name="send" value="Go">
		</form>
		<!--<a href="newUser.php">Create User</a>-->
	</section>
</body>
</html>