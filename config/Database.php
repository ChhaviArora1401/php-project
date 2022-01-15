<?php
session_start();
class Database{
	
	private $host = 'sql201.epizy.com';
    private $user ='epiz_30823510';
    private $password = "bsfwoUf1fE47";
    private $database = "epiz_30823510_demo"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>