<?php 
	class requestEstudents{	
		function view($con){
		$query="SELECT * FROM estudiante";
		foreach ($con->query($query) as $rs) {
		var_dump($rs);
	}
		}
		function update(){}
		function delete(){}
		function add(){}
	}
 ?>
 