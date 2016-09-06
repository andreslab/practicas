<?php 
	require("utils.php");

	$op_= $_GET['view'];

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
			echo "carrera";
			$model=new modelView();
			$data=$model->carreraModel();
			
		}
		public function docenteController(){
			echo "docente";
		}
		public function empresaController(){
			echo "empresa";
		} 
		public function estudianteController(){
			echo "estudiante";
		}
		public function facultadController(){
			echo "facultad";
		}
		public function materiaController(){
			echo "materia";
		}
		public function semestreController(){
			echo "semestre";
		}
		public function usuarioController(){
			echo "usuario";
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