<?php 
	echo "<meta charset='utf-8'>";
	require("utils.php");


	$op_= $_GET['task'];

	class controllerView implements controllerStructure{

		private $option= array(
			"Inicio",
			"Carreras",
			"Empresas",
			"Estudiantes",
			"Docentes",
			"Facultad",
			"Materias",
			"Semestres");

		private function inicio(){}

		public function carreraController(){
			$model=new modelView();
			$view= new viewCareer();

			$data=$model->carreraModel();
			$view->showView($data);
			$global=1;
		}
		public function docenteController(){
			$model=new modelView();
			$view= new viewTeacher();

			$data=$model->docenteModel();
			$view->showView($data);
			$global=2;
		}
		public function empresaController(){
			$model=new modelView();
			$view= new viewCompany();

			$data=$model->empresaModel();
			$view->showView($data);
			$global=3;
		} 
		public function estudianteController(){
			$model=new modelView();
			$view= new viewEstudent();

			$data=$model->estudianteModel();
			$view->showView($data);
			$global=4;
		}
		public function facultadController(){
			$model=new modelView();
			$view= new viewFaculty();

			$data=$model->facultadModel();
			$view->showView($data);
			$global=5;
		}
		public function materiaController(){
			$model=new modelView();
			$view= new viewClass();

			$data=$model->materiaModel();
			$view->showView($data);
			$global=6;
		}
		public function semestreController(){
			$model=new modelView();
			$view= new viewSemester();

			$data=$model->semestreModel();
			$view->showView($data);
			$global=7;
		}
		public function usuarioController(){
			echo "funciona";
		}
		
		public function select($op){
			switch ($op) {
				case $this->option[0]:
					# code...
					break;
				case $this->option[1]:
					$this->carreraController();
					break;
				case $this->option[2]:
					$this->empresaController();
					break;
				case $this->option[3]:
					$this->estudianteController();
					break;
				case $this->option[4]:
					$this->docenteController();
					break;
				case $this->option[5]:
					$this->facultadController();
					break;
				case $this->option[6]:
					$this->materiaController();
					break;
				case $this->option[7]:
					$this->semestreController();
					break;
				
				default:
					$this->inicio();
					break;
			}
		} 
	}


	$f =new controllerView();
	$f->select($op_); 


 ?>