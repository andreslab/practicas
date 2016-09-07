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

		// Peticiones con un identificador
			public function carreraModelId($key){
			return $this->exec(CARRERA_VIEW.$key);}
		public function docenteModelId($key){
			return $this->exec(DOCENTE_TUTOR_VIEW.$key);}
		public function empresaModelId($key){
			return $this->exec(EMPRESA_VIEW.$key);}
		public function estudianteModelId($key){
			return $this->exec(ESTUDIANTE_VIEW.$key);}
		public function facultadModelId($key){
			return $this->exec(FACULTAD_VIEW.$key);}
		public function materiaModelId($key){
			return $this->exec(MATERIA_VIEW.$key);}
		public function semestreModelId($key){
			return $this->exec(SEMESTRE_VIEW.$key);}
		public function usuarioModelId($key){
			return $this->exec(USUARIO_VIEW.$key);}

		private function exec($sql){
			$response=$this->resp->viewRequest($sql);
			return $response;
		}
	}
	
 ?>