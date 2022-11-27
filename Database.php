<?php 
echo "<pre>";


class Database {

	public $tableName = null ; 
	public $conn = null ; // mysqli object

	public function __construct($tName)
	{
		$this->tableName = $tName ;
		$this->connect();

	}

	public function connect()
	{
		
		$this->conn = new mysqli('localhost','root','','oop');
		// mysqli object
	}

	public function readAll()
	{
		$select = "SELECT * FROM {$this->tableName}";
		$query = $this->conn->query($select);
		//return array 

		$array = [];

		foreach ($query as $row) {
			$array[] = $row ;
		}

		return $array ;

	}

	public function read($con , $val)
	{
		$select = "SELECT * FROM {$this->tableName} WHERE {$con} = '$val'";
		$query = $this->conn->query($select);
		//return array 

		$array = [];

		foreach ($query as $row) {
			$array[] = $row ;
		}

		return $array ;

	}


	// insert 
	public function insert(array $values)
	{
		// id , username , password , email , address
		// 'id' , 'username' , 'password' , 'email' , 'address'

		$keys = array_keys($values);
		$keys = implode(',', $keys);

		$value = array_values($values);
		$value = "'".implode("','" , $value)."'";

		$insert = "INSERT INTO {$this->tableName} ({$keys}) VALUES ({$value})";
		
		$this->conn->query($insert);

	}


} // end class


# -------------------------


$users = new Database('users');

$x = $users->readAll(); // return array 

// print_r($x);

// $users->read('id' , 5); // return array 

// $users->delete('id' , 5); // void

$users->insert([
	'id' => null ,
	'username'=>'ahmed',
	'email'=>'ahmed@gmail.com',
	'password' => 123
]); // void

