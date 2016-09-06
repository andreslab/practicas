<?php 

	interface modelStructure_add{
		public function carreraModel($data,$arrayData);
		public function docenteModel($data,$arrayData);
		public function empresaModel($data,$arrayData);
		public function estudianteModel($data,$arrayData);
		public function facultadModel($data,$arrayData);
		public function materiaModel($data,$arrayData);
		public function semestreModel($data,$arrayData);
		public function usuarioModel($data,$arrayData);
	}

	interface modelStructure_delete{
		public function carreraModel($id);
		public function docenteModel($id);
		public function empresaModel($id);
		public function estudianteModel($id);
		public function facultadModel($id);
		public function materiaModel($id);
		public function semestreModel($id);
		public function usuarioModel($id);
	}
	interface modelStructure_update{
		public function carreraModel($arrayData);
		public function docenteModel($arrayData);
		public function empresaModel($arrayData);
		public function estudianteModel($arrayData);
		public function facultadModel($arrayData);
		public function materiaModel($arrayData);
		public function semestreModel($arrayData);
		public function usuarioModel($arrayData);
	}

	interface modelStructure_view{
		public function carreraModel();
		public function docenteModel();
		public function empresaModel();
		public function estudianteModel();
		public function facultadModel();
		public function materiaModel();
		public function semestreModel();
		public function usuarioModel();
	}

?>