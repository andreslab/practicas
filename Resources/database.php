<?php 
	require("config.php");

	class database{

		private $con;

		public function __construct(){
			$this->con=new mysqli(
				SERVER,
				USER,
				PASS,
				DB);
			if(mysqli_connect_errno()){
				echo "Fallo la conexión";
				exit();
			}
			else{
				echo "Conexión exitosa";
				//return $this->con;
			}
		} 
		public function updateRequest($sql){
			$response=$this->con->query($sql);
			return $response;
		}
		public function addRequest($sql){
			$response=$this->con->prepare($sql);
			return $response;
		}
		public function deleteRequest($sql){
			$response=$this->con->query($sql);
		}
		public function viewRequest($sql){
			$response=$this->con->query($sql);
			return $response;
		}

		public function __destruct(){
			$this->con->close();
			echo "Conexión destruida";
		}
	}

 ?>