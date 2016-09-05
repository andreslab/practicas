<?php 
	require("Models/utils.php");

	class modelUpdate implements modelStructure_update{

		private $resp;

		public function __construct(){
			$this->resp=$con=new database();
		}

		public function carreraModel($arrayData){
			$response=updateData::CARRERA_UP($arrayData[0], $arrayData[1]);
			$this->execute($response);
		}
		public function docenteModel($arrayData){
			$response=updateData::DOCENTE_TUTOR_UP($arrayData[0], $arrayData[1], $arrayData[2], $arrayData[3]);
			$this->execute($response);
		}
		public function empresaModel($arrayData){
			$response=updateData::EMPRESA_UP($arrayData[0], $arrayData[1], $arrayData[2], $arrayData[3], $arrayData[4], $arrayData[5], $arrayData[6], $arrayData[7]);
			$this->execute($response);
		}
		public function estudianteModel($arrayData){
			$response=updateData::ESTUDIANTE_UP($arrayData[0], $arrayData[1], $arrayData[2], $arrayData[3]);
			$this->execute($response);
		}
		public function facultadModel($arrayData){
			$response=updateData::FACULTAD_UP($arrayData[0], $arrayData[1], $arrayData[2], $arrayData[3], $arrayData[4], $arrayData[5]);
			$this->execute($response);
		}
		public function materiaModel($arrayData){
			$response=updateData::MATERIA_UP($arrayData[0], $arrayData[1], $arrayData[2], $arrayData[3]);
			$this->execute($response);
		}
		public function semestreModel($arrayData){
			$response=updateData::SEMESTRE_UP($arrayData[0], $arrayData[1], $arrayData[2], $arrayData[3]);
			$this->execute($response);
		}
		public function usuarioModel($arrayData){
			$response=updateData::USUARIO_UP($arrayData[0], $arrayData[1], $arrayData[2]);
			$this->execute($response);
		}

		private function execute($sql){
			$response=$this->resp->updateRequest($sql);
			return $response;
		}
	}
	
 ?>