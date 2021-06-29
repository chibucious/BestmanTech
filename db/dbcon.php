<?php

	class Connection{

		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $db = "anyany";

		public function connect(){
			$conn = new mysqli($this->servername,$this->username,$this->password,$this->db);

			if($conn){
				// echo "Connected";
				return $conn;
			}else{
				echo "Not Connected";
			}

		}


	}

	$connec = new Connection;
	$connec->connect();



?>