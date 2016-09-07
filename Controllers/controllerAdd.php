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

	$option=$_GET['option'];

	$local= new controllerAdd();
	switch ($option) {
		case "Carreras":
			$local->carreraController();
			break;
		case "Empresas":
			$local->empresaController();
			break;
		case "Estudiantes":
			$local->estudianteController();
			break;
		case "Docentes":
			$local->docenteController();
			break;
		case "Facultad":
			$local->facultadController();
			break;
		case "Materias":
			$local->materiaController();
			break;
		case "Semestres":
			$local->semestreController();
			break;
		default:
			
			break;
	}

 ?>