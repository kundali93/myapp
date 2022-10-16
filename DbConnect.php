<?php
	/**
	* Database Connection
	*/
	class DbConnect {
		private $server = 'awseb-e-vjmh8svkrk-stack-awsebrdsdatabase-ckov2yb0cvbk.ciedmyepmavr.ap-south-1.rds.amazonaws.com:3306';
		private $dbname = 'new_db';
		private $user = 'admin';
		private $pass = 'rajesh123A';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' .$this->server .';dbname=' . $this->dbname, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "connection done";
				return $conn;
			} catch (\Exception $e) {
				echo "Database Error: " . $e->getMessage();
			}
		}

	}
?>