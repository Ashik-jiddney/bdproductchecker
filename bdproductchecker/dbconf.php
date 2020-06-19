<?php
class Database{
	
	private $servername,$username,$password,$dbname;
	
	protected function connect(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "bdproductchecker";
		
		$conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
		
		return $conn;
	}
}	/*public $conn;
	
	public function __construct()
	{
		$this->conn = mysqli_connect("localhost","root","","csejnu");
	}*/

    $db = mysqli_connect("localhost","root","","bdproductchecker");

?>