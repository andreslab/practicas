<?php 
	interface viewStructure{
		public function showAdd();
		public function showDelete($result);
		public function showUpdate($arrayData);
		public function showView($result);
	}
 ?>