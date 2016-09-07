<?php 
	require("utils.php");

	echo "entre update";
	$stringIds=$_GET['idUpdate'];
	

	class controllerUpdate implements controllerStructure{
		public function carreraController(){
			$view= new viewCareer();
			$view->showUpdate($arraydata);
		}
		public function docenteController(){
			$view= new viewTeacher();
			$view->showUpdate($arraydata);
		}
		public function empresaController(){
			$view= new viewCompany();
			$view->showUpdate($arraydata);
		} 
		public function estudianteController(){
			$view= new viewEstudent();
			$view->showUpdate($arraydata);
		}
		public function facultadController(){
			$view= new viewFaculty();
			$view->showUpdate($arraydata);
		}
		public function materiaController(){
			$view= new viewClass();
			$view->showUpdate($arraydata);
		}
		public function semestreController(){
			$view= new viewSemester();
			$view->showUpdate($arraydata);
		}
		public function usuarioController(){}
	}

	$option=$_GET['option'];

	$local= new controllerUpdate();
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