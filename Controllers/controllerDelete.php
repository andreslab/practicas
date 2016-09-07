<?php 
	require("utils.php");

	$stringIds=$_GET['idsDelete'];

	
	
	class controllerDelete implements controllerStructure_ids{

		

		public function carreraController($stringIds){
			$ids= $this->convertArray($stringIds);
			$m= new modelDelete();
			for($e=0; $e<count($m);$e++){
				$m->carreraModel($ids[$e]);
			}
		}
		public function docenteController($stringIds){
			$ids= $this->convertArray($stringIds);
			$m= new modelDelete();
			for($e=0; $e<count($m);$e++){
				$m->docenteModel($ids[$e]);
			}

		}
		public function empresaController($stringIds){
			$ids= $this->convertArray($stringIds);
			$m= new modelDelete();
			for($e=0; $e<count($m);$e++){
				$m->empresaModel($ids[$e]);
			}
		} 
		public function estudianteController($stringIds){
			$ids= $this->convertArray($stringIds);
			$m= new modelDelete();
			for($e=0; $e<count($m);$e++){
				$m->estudianteModel($ids[$e]);
			}
		}
		public function facultadController($stringIds){
			$ids= $this->convertArray($stringIds);
			$m= new modelDelete();
			for($e=0; $e<count($m);$e++){
				$m->facultadModel($ids[$e]);
			}
		}
		public function materiaController($stringIds){
			$ids= $this->convertArray($stringIds);
			$m= new modelDelete();
			for($e=0; $e<count($m);$e++){
				$m->materiaModel($ids[$e]);
			}
		}
		public function semestreController($stringIds){
			$ids= $this->convertArray($stringIds);
			$m= new modelDelete();
			for($e=0; $e<count($m);$e++){
				$m->semestreModel($ids[$e]);
			}
		}
		public function usuarioController($stringIds){}

		private function convertArray($data){
			$convert=str_replace ( "," , " " , $data);
			return $resp= explode(" ",$convert);
			
		}	
	}

	$option=$_GET['option'];
	

	$localDelete= new controllerDelete();
	switch ($option) {
		case "Carreras":
			$localDelete->carreraController($stringIds);
			break;
		case "Empresas":
			$localDelete->empresaController($stringIds);
			break;
		case "Estudiantes":
			$localDelete->estudianteController($stringIds);
			break;
		case "Docentes":
			$localDelete->docenteController($stringIds);
			break;
		case "Facultad":
			$localDelete->facultadController($stringIds);
			break;
		case "Materias":
			$localDelete->materiaController($stringIds);
			break;
		case "Semestres":
			$localDelete->semestreController($stringIds);
			break;
		default:
			
			break;
	}

 ?>