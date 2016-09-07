<?php 

	interface controllerStructure{
		public function carreraController();
		public function docenteController();
		public function empresaController(); 
		public function estudianteController();
		public function facultadController();
		public function materiaController();
		public function semestreController();
		public function usuarioController();
	}

	interface controllerStructure_ids{
		public function carreraController($strinIds);
		public function docenteController($strinIds);
		public function empresaController($strinIds); 
		public function estudianteController($strinIds);
		public function facultadController($strinIds);
		public function materiaController($strinIds);
		public function semestreController($strinIds);
		public function usuarioController($strinIds);
	}
 ?>