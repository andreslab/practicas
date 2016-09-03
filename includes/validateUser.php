<?php 
	$query="SELECT * FROM usuario";
	$statement= $con->prepare($query);
	$statement->execute(array());
	$result = $statement->fetchAll();
	foreach ($result as $key) {
		$userName= $key['userName'];
		$userPass= $key['userPass'];
	}

	$inputName=$_POST['inputName'];
	$inputPass=$_POST['inputPass'];


	if($inputName==$userName && $inputPass==$userPass){
	}else{
		header("Location: index.php");
	}

	echo "<script>
	document.getElementById('log').innerHTML='Hi, ".$inputName."'
	</script>";


 ?>