<?php 
	require("Models/modelStructure.php");
	require("Resources/database.php");
	require("Resources/requestList.php");

	class modelView implements modelStructure{

		private $resp;

		public function __construct(){
			$this->resp=$con=new database();
		}

		public function carreraModel(){
			return $this->execute(CARRERA_VIEW);}
		public function docenteModel(){
			return $this->execute(DOCENTE_TUTOR_VIEW);}
		public function empresaModel(){
			return $this->execute(EMPRESA_VIEW);}
		public function estudianteModel(){
			return $this->execute(ESTUDIANTE_VIEW);}
		public function facultadModel(){
			return $this->execute(FACULTAD_VIEW);}
		public function materiaModel(){
			return $this->execute(MATERIA_VIEW);}
		public function usuarioModel(){
			return $this->execute(USUARIO_VIEW);}

		private function execute($sql){
			$response=$this->resp->viewRequest($sql);
			return $response;
		}
	}
	
 ?>