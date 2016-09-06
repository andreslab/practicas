<?php 

	class modelAdd implements modelStructure_add{

		private $resp;

		public function __construct(){
			$this->resp=$con=new database();
		}

		public function carreraModel($typeData, $arrayData){
			$position =$this->autoPosition(CARRERA_VIEW);
			$response=$this->execute(CARRERA_ADD);
			$response->bind_param($typeData, $position, $arrayData[0]);
			$response->execute();
		}
		public function docenteModel($typeData, $arrayData){
			$position =$this->autoPosition(DOCENTE_TUTOR_VIEW);
			$response=$this->execute(DOCENTE_TUTOR_ADD);
			$response->bind_param($typeData, $position, $arrayData[0], $arrayData[1], $arrayData[2]);
			$response->execute();
		}
		public function empresaModel($typeData, $arrayData){
			$position =$this->autoPosition(EMPRESA_VIEW);
			$response=$this->execute(EMPRESA_ADD);
			$response->bind_param($typeData, $position, $arrayData[0], $arrayData[1], $arrayData[2], $arrayData[3], $arrayData[4], $arrayData[5], $arrayData[6]);
			$response->execute();
		}
		public function estudianteModel($typeData, $arrayData){
			$position =$this->autoPosition(ESTUDIANTE_VIEW);
			$response=$this->execute(ESTUDIANTE_ADD);
			$response->bind_param($typeData, $position, $arrayData[0], $arrayData[1], $arrayData[2]);
			$response->execute();
		}
		public function facultadModel($typeData, $arrayData){
			$position =$this->autoPosition(FACULTAD_VIEW);
			$response=$this->execute(FACULTAD_ADD);
			$response->bind_param($typeData, $position, $arrayData[0], $arrayData[1], $arrayData[2], $arrayData[3], $arrayData[4]);
			$response->execute();
		}
		public function materiaModel($typeData, $arrayData){
			$position =$this->autoPosition(MATERIA_VIEW);
			$response=$this->execute(MATERIA_ADD);
			$response->bind_param($typeData, $position, $arrayData[0], $arrayData[1], $arrayData[2]);
			$response->execute();
		}
		public function semestreModel($typeData, $arrayData){
			$position =$this->autoPosition(SEMESTRE_VIEW);
			$response=$this->execute(SEMESTRE_ADD);
			$response->bind_param($typeData, $position, $arrayData[0], $arrayData[1], $arrayData[2]);
			$response->execute();
		}
		public function usuarioModel($typeData, $arrayData){
			$position =$this->autoPosition(USER_VIEW);
			$response=$this->execute(USUARIO_ADD);
			$response->bind_param($typeData, $position, $arrayData[0], $arrayData[1]);
			$response->execute();
		}

		private function execute($sql){
			$response=$this->resp->updateRequest($sql);
			return $response;
		}

		private function autoPosition($sql){
			$count=0;
			$response=$this->resp->viewRequest($sql);
			while($e = $response->fetch_row()){$count++;}
			++$count; //valor siguiente
			return $count;
		}
	}
	
 ?>