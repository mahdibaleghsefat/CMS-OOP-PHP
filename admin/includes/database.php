<?php 

require_once("new_config.php");

class Database {
	public $connection;

	function __construct(){
		$this->open_db_connection();
	}

	public function open_db_connection(){
		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($this->connection->connect_errno) {
			die("Database connection failed badly" . mysqli_error());
		}
	}

	public function query($sql){
		$result = mysqli_query($this->connection, $sql);
		return $result;	
	}

	private function confirm_query($reset){
		if (!$result) {
			die("Query failed");
		}
	}

	public function escape_string($string){
		$escape_string = mysql_real_escape_string($this->connection, $string);
		return $escape_string;
	}

}

$database = new Database();