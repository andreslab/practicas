<?php 
	require("Models/modelStructure.php");

	class modelUpdate implements modelStructure{

		private $resp;

		public function __construct(){
			$this->resp=$con=new database();
		}
		
		public function carreraModel(){}
		public function docenteModel(){}
		public function empresaModel(){}
		public function estudianteModel(){}
		public function facultadModel(){}
		public function materiaModel(){}
		public function usuarioModel(){}
	}
	
 ?>