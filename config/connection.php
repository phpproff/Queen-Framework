<?php
class connection{
	protected $conn;
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database="db_test";

		$conn = new mysqli($servername, $username, $password, $database);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$this->conn = $conn;


	}

}



?>