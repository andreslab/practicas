<pre>
<?php 
	$query="SELECT * FROM estudiante";
	foreach ($con->query($query) as $rs) {
		var_dump($rs);
	}
 ?>
 </pre>