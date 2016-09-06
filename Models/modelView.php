<?php 
	class modelView implements modelStructure_view{

		private $resp;

		public function __construct(){
			$this->resp=$con=new database();
		}

		public function carreraModel(){
			return $this->exec(CARRERA_VIEW);}
		public function docenteModel(){
			return $this->exec(DOCENTE_TUTOR_VIEW);}
		public function empresaModel(){
			return $this->exec(EMPRESA_VIEW);}
		public function estudianteModel(){
			return $this->exec(ESTUDIANTE_VIEW);}
		public function facultadModel(){
			return $this->exec(FACULTAD_VIEW);}
		public function materiaModel(){
			return $this->exec(MATERIA_VIEW);}
		public function semestreModel(){
			return $this->exec(SEMESTRE_VIEW);}
		public function usuarioModel(){
			return $this->exec(USUARIO_VIEW);}

		private function exec($sql){
			$response=$this->resp->viewRequest($sql);
			return $response;
		}
	}
	
 ?>