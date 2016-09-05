<?php 
	require("Models/utils.php");

	class modelDelete implements modelStructure_delete{

		private $resp;

		public function __construct(){
			$this->resp=$con=new database();
		}

		public function carreraModel($id){
			$this->execute(CARRERA_DE.$id);}
		public function docenteModel($id){
			$this->execute(DOCENTE_TUTOR_DE.$id);}
		public function empresaModel($id){
			$this->execute(EMPRESA_DE.$id);}
		public function estudianteModel($id){
			$this->execute(ESTUDIANTE_DE.$id);}
		public function facultadModel($id){
			$this->execute(FACULTAD_DE,$id);}
		public function materiaModel($id){
			$this->execute(MATERIA_DE.$id);}
		public function semestreModel($id){
			$this->execute(SEMESTRE_DE.$id);}
		public function usuarioModel($id){
			$this->execute(USUARIO_DE.$id);}

		private function execute($sql){
			$this->resp->deleteRequest($sql);
		}
	}
	
 ?>