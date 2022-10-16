<?php
	/**
	* Database Connection
	*/
	class DbConnect {
		private $server = 'database-2.ciedmyepmavr.ap-south-1.rds.amazonaws.com:3306';
		private $dbname = 'react_crud';
		private $user = 'admin';
		private $pass = 'rajesh123A';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' .$this->server .';dbname=' . $this->dbname, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch (\Exception $e) {
				echo "Database Error: " . $e->getMessage();
			}
		}
        
	}
?>
