<?php 
	require("utils.php");

	$stringIds=$_GET['idUpdate'];


	
	
	

	


	class controllerUpdate implements controllerStructure{
		public function carreraController(){

			$model=new modelView();
			$data=$model->carreraModel();
			$key = $data->fetch_row();

			$arraydata=array($key[0],$key[1]);
			$view= new viewCareer();
			$view->showUpdate($arraydata);
		}
		public function docenteController(){

			$model=new modelView();
			$data=$model->docenteModel();
			$key = $data->fetch_row();

			$arraydata=array($key[0],$key[1],$key[2],$key[3]);
			$view= new viewTeacher();
			$view->showUpdate($arraydata);
		}
		public function empresaController(){

			$model=new modelView();
			$data=$model->empresaModel();
			$key = $data->fetch_row();

			$arraydata=array($key[0],$key[1],$key[2],$key[3],$key[4],$key[5],$key[6],$key[7]);
			$view= new viewCompany();
			$view->showUpdate($arraydata);
		} 
		public function estudianteController(){

			$model=new modelView();
			$data=$model->estudianteModel();
			$key = $data->fetch_row();

			$arraydata=array($key[0],$key[1],$key[2],$key[3]);
			$view= new viewEstudent();
			$view->showUpdate($arraydata);
		}
		public function facultadController(){

			$model=new modelView();
			$data=$model->facultadModel();
			$key = $data->fetch_row();

			$arraydata=array($key[0],$key[1],$key[2],$key[3],$key[4], $key[5]);
			$view= new viewFaculty();
			$view->showUpdate($arraydata);
		}
		public function materiaController(){

			$model=new modelView();
			$data=$model->materiaModel();
			$key = $data->fetch_row();

			$arraydata=array($key[0],$key[1],$key[2],$key[3]);
			$view= new viewClass();
			$view->showUpdate($arraydata);
		}
		public function semestreController(){
			$model=new modelView();
			$data=$model->semestreModel();
			$key = $data->fetch_row();

			$arraydata=array($key[0],$key[1],$key[2],$key[3]);
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