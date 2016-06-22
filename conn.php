<?php

class Conn{
	
	public $servername = "localhost";
	public $username = "root";
	public $password = "root";
	public $database = "news";
	
	function getConn(){
		$conn = new mysqli($this->servername, $this->username,$this->password,$this->database);

		// 检测连接
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			echo "<br/>-----------Error----------------";
			return "";
		}
		
		return $conn;
	}

}



?>