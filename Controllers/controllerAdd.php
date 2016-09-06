<?php 
	require("utils.php");
	

	class controllerAdd implements controllerStructure{
		public function carreraController(){
			$view= new viewCareer();
			$view->showAdd();
		}
		public function docenteController(){
			$view= new viewTeacher();
			$view->showAdd();
		}
		public function empresaController(){
			$view= new viewCompany();
			$view->showAdd();
		} 
		public function estudianteController(){
			$view= new viewEstudent();
			$view->showAdd();
		}
		public function facultadController(){
			$view= new viewFaculty();
			$view->showAdd();
		}
		public function materiaController(){
			$view= new viewClass();
			$view->showAdd();
		}
		public function semestreController(){
			$view= new viewSemester();
			$view->showAdd();
		}
		public function usuarioController(){
		}


	}

	echo $global;

	$local= new controllerAdd();
	switch ($global) {
		case 1:
			$local->carreraController();
			break;
		case 2:
			$local->empresaController();
			break;
		case 3:
			$local->estudianteController();
			break;
		case 4:
			$local->docenteController();
			break;
		case 5:
			$local->facultadController();
			break;
		case 6:
			$local->materiaController();
			break;
		case 7:
			$local->semestreController();
			break;
		default:
			
			break;
	}

 ?>